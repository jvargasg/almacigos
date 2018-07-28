<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\CondicionVenta;
use Almacigos\VentaBundle\Form\CondicionVentaType;

/**
 * CondicionVenta controller.
 *
 * @Route("/condicionventa")
 */
class CondicionVentaController extends Controller
{

    /**
     * Lists all CondicionVenta entities.
     *
     * @Route("/", name="condicionventa")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:CondicionVenta')->findAll();

        return array(
            'entities' => $entities,
            'condicionventa_active' => 'active',
        );
    }
    /**
     * Creates a new CondicionVenta entity.
     *
     * @Route("/", name="condicionventa_create")
     * @Method("POST")
     * @Template("VentaBundle:CondicionVenta:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CondicionVenta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('condicionventa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'condicionventa_active' => 'active',
        );
    }

    /**
     * Creates a form to create a CondicionVenta entity.
     *
     * @param CondicionVenta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CondicionVenta $entity)
    {
        $form = $this->createForm(new CondicionVentaType(), $entity, array(
            'action' => $this->generateUrl('condicionventa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CondicionVenta entity.
     *
     * @Route("/new", name="condicionventa_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CondicionVenta();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'condicionventa_active' => 'active',
        );
    }

    /**
     * Finds and displays a CondicionVenta entity.
     *
     * @Route("/{id}", name="condicionventa_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:CondicionVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CondicionVenta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'condicionventa_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing CondicionVenta entity.
     *
     * @Route("/{id}/edit", name="condicionventa_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:CondicionVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CondicionVenta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'condicionventa_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a CondicionVenta entity.
    *
    * @param CondicionVenta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CondicionVenta $entity)
    {
        $form = $this->createForm(new CondicionVentaType(), $entity, array(
            'action' => $this->generateUrl('condicionventa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CondicionVenta entity.
     *
     * @Route("/{id}", name="condicionventa_update")
     * @Method("PUT")
     * @Template("VentaBundle:CondicionVenta:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:CondicionVenta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CondicionVenta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('condicionventa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'condicionventa_active' => 'active',
        );
    }
    /**
     * Deletes a CondicionVenta entity.
     *
     * @Route("/{id}", name="condicionventa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:CondicionVenta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CondicionVenta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('condicionventa'));
    }

    /**
     * Creates a form to delete a CondicionVenta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('condicionventa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
