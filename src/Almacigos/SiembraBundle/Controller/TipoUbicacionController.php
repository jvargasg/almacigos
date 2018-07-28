<?php

namespace Almacigos\SiembraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\SiembraBundle\Entity\TipoUbicacion;
use Almacigos\SiembraBundle\Form\TipoUbicacionType;

/**
 * TipoUbicacion controller.
 *
 * @Route("/tipoubicacion")
 */
class TipoUbicacionController extends Controller
{

    /**
     * Lists all TipoUbicacion entities.
     *
     * @Route("/", name="tipoubicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiembraBundle:TipoUbicacion')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TipoUbicacion entity.
     *
     * @Route("/", name="tipoubicacion_create")
     * @Method("POST")
     * @Template("SiembraBundle:TipoUbicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TipoUbicacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipoubicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TipoUbicacion entity.
     *
     * @param TipoUbicacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoUbicacion $entity)
    {
        $form = $this->createForm(new TipoUbicacionType(), $entity, array(
            'action' => $this->generateUrl('tipoubicacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoUbicacion entity.
     *
     * @Route("/new", name="tipoubicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TipoUbicacion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TipoUbicacion entity.
     *
     * @Route("/{id}", name="tipoubicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:TipoUbicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoUbicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TipoUbicacion entity.
     *
     * @Route("/{id}/edit", name="tipoubicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:TipoUbicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoUbicacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a TipoUbicacion entity.
    *
    * @param TipoUbicacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoUbicacion $entity)
    {
        $form = $this->createForm(new TipoUbicacionType(), $entity, array(
            'action' => $this->generateUrl('tipoubicacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoUbicacion entity.
     *
     * @Route("/{id}", name="tipoubicacion_update")
     * @Method("PUT")
     * @Template("SiembraBundle:TipoUbicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:TipoUbicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoUbicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipoubicacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TipoUbicacion entity.
     *
     * @Route("/{id}", name="tipoubicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiembraBundle:TipoUbicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoUbicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipoubicacion'));
    }

    /**
     * Creates a form to delete a TipoUbicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoubicacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
