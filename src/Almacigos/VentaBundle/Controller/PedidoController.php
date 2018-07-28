<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\Pedido;
use Almacigos\VentaBundle\Form\PedidoType;
use Almacigos\VentaBundle\Entity\NotaVenta;
use Almacigos\VentaBundle\Form\PedidoNvType;
use Almacigos\VentaBundle\Form\PedidoEditarType;

/**
 * Pedido controller.
 *
 * @Route("/pedido")
 */
class PedidoController extends Controller
{

    /**
     * Lists all Pedido entities.
     *
     * @Route("/", name="pedido")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:Pedido')->findAll();

        return array(
            'entities' => $entities,
            'pedido_active' => 'active',
        );
    }
    /**
     * Creates a new Pedido entity.
     *
     * @Route("/", name="pedido_create")
     * @Method("POST")
     * @Template("VentaBundle:Pedido:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Pedido();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();


            return $this->redirect($this->generateUrl('pedido_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'pedido_active' => 'active',
        );
    }

    /**
     * Creates a form to create a Pedido entity.
     *
     * @param Pedido $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pedido $entity)
    {
        $form = $this->createForm(new PedidoType(), $entity, array(
            'action' => $this->generateUrl('pedido_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ingresar'));

        return $form;
    }

    /**
     * Displays a form to create a new Pedido entity.
     *
     * @Route("/new", name="pedido_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Pedido();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'pedido_active' => 'active',
        );
    }

    /**
     * Ingresa un nuevo pedido a una Nota de Venta.
     *
     * @Route("/agregar/{id}", name="nv_new_pedido")
     * @Method("GET")
     * @Template()
     */
    public function agregarAction(NotaVenta $nv)
    {
        $entity = new Pedido();

        $form = $this->createForm(new PedidoNvType(), $entity, array(
            'action' => $this->generateUrl('pedido_agregar', array('id' => $nv->getId() )),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Agregar'));

        $entity->setNotaVenta($nv);

        return array(
            'entity' => $entity,
            'nv' => $nv,
            'form'   => $form->createView(),
            'pedido_active' => 'active',
        );
    }
    /**
     * Agrega un nuevo Pedido a Nota de Venta.
     *
     * @Route("/agregar/{id}", name="pedido_agregar")
     * @Method("POST")
     * @Template("VentaBundle:Pedido:agregar.html.twig")
     */
    public function create2Action(Request $request, NotaVenta $nv)
    {
        $entity = new Pedido();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setNotaVenta($nv);  
            $entity->setEstado(1);          
            $em->persist($entity);
            $em->flush();
            
            //DESCONTAR SEMILLAS DESDE STOCK
            //$this->descontarSemillas($entity);

            //Calcular Neto y Total de Nota de Venta
            $this->totalesNotaVenta($nv, $entity->getNeto(), $entity->getTotal() );

            return $this->redirect($this->generateUrl('notaventa_show', array('id' =>$nv->getId() )));
            //return $this->redirect($this->generateUrl('pedido_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'pedido_active' => 'active',
        );
    }

    private function totalesNotaVenta(NotaVenta $nv, $netoPedido, $totalPedido)
    {   
        $neto = $nv->getNeto() + $netoPedido;
        $nv->setNeto($neto);        

        $total = $nv->getTotal() + $totalPedido;
        $nv->setTotal($total);

        $iva = $neto * 0.19;
        $nv->setIva($iva);

        $em = $this->getDoctrine()->getManager();
        $em->persist($nv);
        $em->flush();
    }

    private function descontarSemillas(Pedido $pedido)
    {

    }

    public function numeroPedido($id)
    {
        /*
            Para obtener el numero de pedido, se deben contar la cantidad de pedidos de la nota de venta
            y a eso sumarle 1
        */
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("
        SELECT a
        FROM VentaBundle:NotaVenta a
        WHERE a.id = :id
        ")->setParameters(array(
            'id' => $id,
        ));
                
        $nv = $query->getResult();

        $total=0;
        foreach ($nv as $a) {
            $total++;
        }

        return $total + 1;
    }

    /**
     * Finds and displays a Pedido entity.
     *
     * @Route("/{id}", name="pedido_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'pedido_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing Pedido entity.
     *
     * @Route("/{id}/edit", name="pedido_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'pedido_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a Pedido entity.
    *
    * @param Pedido $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pedido $entity)
    {
        $form = $this->createForm(new PedidoEditarType(), $entity, array(
            'action' => $this->generateUrl('pedido_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }
    /**
     * Edits an existing Pedido entity.
     *
     * @Route("/{id}", name="pedido_update")
     * @Method("PUT")
     * @Template("VentaBundle:Pedido:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pedido_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'pedido_active' => 'active',
        );
    }
    /**
     * Deletes a Pedido entity.
     *
     * @Route("/{id}", name="pedido_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:Pedido')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pedido entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pedido'));
    }

    /**
     * Creates a form to delete a Pedido entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedido_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
