<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\Semilla;
use Almacigos\VentaBundle\Form\SemillaType;

/**
 * Semilla controller.
 *
 * @Route("/semilla")
 */
class SemillaController extends Controller
{

    /**
     * Lists all Semilla entities.
     *
     * @Route("/", name="semilla")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:Semilla')->findAll();

        return array(
            'entities' => $entities,
            'semilla_active' => 'active',
        );
    }
    /**
     * Creates a new Semilla entity.
     *
     * @Route("/", name="semilla_create")
     * @Method("POST")
     * @Template("VentaBundle:Semilla:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Semilla();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('semilla_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'semilla_active' => 'active',
        );
    }

    /**
     * Creates a form to create a Semilla entity.
     *
     * @param Semilla $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Semilla $entity)
    {
        $form = $this->createForm(new SemillaType(), $entity, array(
            'action' => $this->generateUrl('semilla_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ingreasr ueva semilla'));

        return $form;
    }

    /**
     * Displays a form to create a new Semilla entity.
     *
     * @Route("/new", name="semilla_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Semilla();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'semilla_active' => 'active',
        );
    }

    /**
     * Finds and displays a Semilla entity.
     *
     * @Route("/{id}", name="semilla_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Semilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semilla entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'semilla_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing Semilla entity.
     *
     * @Route("/{id}/edit", name="semilla_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Semilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semilla entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'semilla_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a Semilla entity.
    *
    * @param Semilla $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Semilla $entity)
    {
        $form = $this->createForm(new SemillaType(), $entity, array(
            'action' => $this->generateUrl('semilla_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Semilla entity.
     *
     * @Route("/{id}", name="semilla_update")
     * @Method("PUT")
     * @Template("VentaBundle:Semilla:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Semilla')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Semilla entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('semilla_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'semilla_active' => 'active',
        );
    }
    /**
     * Deletes a Semilla entity.
     *
     * @Route("/{id}", name="semilla_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:Semilla')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Semilla entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('semilla'));
    }

    /**
     * Creates a form to delete a Semilla entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('semilla_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
