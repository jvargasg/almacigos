<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\NotaVenta;
use Almacigos\VentaBundle\Form\NotaVentaType;

/**
 * NotaVenta controller.
 *
 * @Route("/notaventa")
 */
class NotaVentaController extends Controller
{

    /**
     * Lists all NotaVenta entities.
     *
     * @Route("/", name="notaventa")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:NotaVenta')->findAll();

        return array(
            'entities' => $entities,
            'notaventa_active' => 'active',
        );
    }
    /**
     * Creates a new NotaVenta entity.
     *
     * @Route("/", name="notaventa_create")
     * @Method("POST")
     * @Template("VentaBundle:NotaVenta:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new NotaVenta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setFechaEmision(new \DateTime());
            $entity->setNeto(0);
            $entity->setTotal(0);
            $entity->setIva(0);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notaventa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'notaventa_active' => 'active',
        );
    }

    /**
     * Creates a form to create a NotaVenta entity.
     *
     * @param NotaVenta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(NotaVenta $entity)
    {
        $form = $this->createForm(new NotaVentaType(), $entity, array(
            'action' => $this->generateUrl('notaventa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Guardar'));

        return $form;
    }

    /**
     * Displays a form to create a new NotaVenta entity.
     *
     * @Route("/new", name="notaventa_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new NotaVenta();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'notaventa_active' => 'active',
        );
    }

    /**
     * Finds and displays a NotaVenta entity.
     *
     * @Route("/{id}", name="notaventa_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:NotaVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotaVenta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        $pedidos = $entity->getPedidos();

        if ($pedidos)
        {
            /*Calcular total y neto
            $total = 0;
            $neto = 0;
            foreach ($pedidos as $p) {
                $neto = $neto + $p->getNeto();
                $total = $total + $p->getTotal();
            }*/
            return array(
                'entity'      => $entity,
                'pedidos'     => $pedidos,  
                'delete_form' => $deleteForm->createView(),
                'notaventa_active' => 'active',
            );
        }
        else
        {
            return array(
                'entity'      => $entity,
                'delete_form' => $deleteForm->createView(),
                'notaventa_active' => 'active',
            );
        }
    }

    /**
     * Displays a form to edit an existing NotaVenta entity.
     *
     * @Route("/{id}/edit", name="notaventa_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:NotaVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotaVenta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'notaventa_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a NotaVenta entity.
    *
    * @param NotaVenta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(NotaVenta $entity)
    {
        $form = $this->createForm(new NotaVentaType(), $entity, array(
            'action' => $this->generateUrl('notaventa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing NotaVenta entity.
     *
     * @Route("/{id}", name="notaventa_update")
     * @Method("PUT")
     * @Template("VentaBundle:NotaVenta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:NotaVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NotaVenta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('notaventa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'notaventa_active' => 'active',
        );
    }
    /**
     * Deletes a NotaVenta entity.
     *
     * @Route("/{id}", name="notaventa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:NotaVenta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NotaVenta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('notaventa'));
    }

    /**
     * Creates a form to delete a NotaVenta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notaventa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
