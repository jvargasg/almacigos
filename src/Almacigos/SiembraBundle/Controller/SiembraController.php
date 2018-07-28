<?php

namespace Almacigos\SiembraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\SiembraBundle\Entity\Siembra;
use Almacigos\SiembraBundle\Form\SiembraType;

/**
 * Siembra controller.
 *
 * @Route("/siembra")
 */
class SiembraController extends Controller
{

    /**
     * Lists all Siembra entities.
     *
     * @Route("/", name="siembra")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiembraBundle:Siembra')->findAll();

        return array(
            'entities' => $entities,
            'siembra_active' => 'active',
        );
    }
    /**
     * Creates a new Siembra entity.
     *
     * @Route("/{idPedido}", name="siembra_create")
     * @Method("POST")
     * @Template("SiembraBundle:Siembra:new.html.twig")
     */
    public function createAction(Request $request, $idPedido)
    {
        $em = $this->getDoctrine()->getManager();
        $pedido = $em->getRepository('VentaBundle:Pedido')->find($idPedido);
        $nv = $pedido->getNotaVenta();

        $siembra = new Siembra();
        $form = $this->createCreateForm($siembra,$idPedido);
        $form->handleRequest($request);

        if ($form->isValid()) {            
            $siembra->setPedido($pedido);
            $estado = $em->getRepository('VentaBundle:EstadoPedido')->find(2);
            $pedido->setEstado($estado);
            $em->persist($siembra);
            $em->flush();

            //DESCONTAR SEMILLAS

            return $this->redirect($this->generateUrl('siembra_show', array('id' => $siembra->getId())));
        }

        return array(
            'entity' => $siembra,
            'nv' => $nv,
            'form'   => $form->createView(),
            'siembra_active' => 'active',
        );
    }

    /**
     * Creates a form to create a Siembra entity.
     *
     * @param Siembra $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Siembra $entity, $idPedido)
    {
        $form = $this->createForm(new SiembraType(), $entity, array(
            'action' => $this->generateUrl('siembra_create', array('idPedido' => $idPedido)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Asignar Siembra'));

        return $form;
    }

    /**
     * Displays a form to create a new Siembra entity.
     *
     * @Route("/new/{idPedido}", name="siembra_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($idPedido)
    {
        $entity = new Siembra();
        $form   = $this->createCreateForm($entity, $idPedido);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'siembra_active' => 'active',
        );
    }

    /**
     * Finds and displays a Siembra entity.
     *
     * @Route("/{id}", name="siembra_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Siembra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se encuentra la siembra.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'siembra_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing Siembra entity.
     *
     * @Route("/{id}/edit", name="siembra_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Siembra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se encuentra la siembra.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'siembra_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a Siembra entity.
    *
    * @param Siembra $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Siembra $entity)
    {
        $form = $this->createForm(new SiembraType(), $entity, array(
            'action' => $this->generateUrl('siembra_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Siembra entity.
     *
     * @Route("/{id}", name="siembra_update")
     * @Method("PUT")
     * @Template("SiembraBundle:Siembra:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Siembra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se encuentra la siembra');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('siembra_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'siembra_active' => 'active',
        );
    }
    /**
     * Deletes a Siembra entity.
     *
     * @Route("/{id}", name="siembra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiembraBundle:Siembra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se encuentra la siembra.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('siembra'));
    }

    /**
     * Creates a form to delete a Siembra entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('siembra_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
