<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\DocumentoRespaldo;
use Almacigos\VentaBundle\Form\DocumentoRespaldoType;

/**
 * DocumentoRespaldo controller.
 *
 * @Route("/documentorespaldo")
 */
class DocumentoRespaldoController extends Controller
{

    /**
     * Lists all DocumentoRespaldo entities.
     *
     * @Route("/", name="documentorespaldo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:DocumentoRespaldo')->findAll();

        return array(
            'entities' => $entities,
            'documentorespaldo_active' => 'active',
        );
    }
    /**
     * Creates a new DocumentoRespaldo entity.
     *
     * @Route("/", name="documentorespaldo_create")
     * @Method("POST")
     * @Template("VentaBundle:DocumentoRespaldo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new DocumentoRespaldo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('documentorespaldo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'documentorespaldo_active' => 'active',
        );
    }

    /**
     * Creates a form to create a DocumentoRespaldo entity.
     *
     * @param DocumentoRespaldo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DocumentoRespaldo $entity)
    {
        $form = $this->createForm(new DocumentoRespaldoType(), $entity, array(
            'action' => $this->generateUrl('documentorespaldo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DocumentoRespaldo entity.
     *
     * @Route("/new", name="documentorespaldo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new DocumentoRespaldo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'documentorespaldo_active' => 'active',
        );
    }

    /**
     * Finds and displays a DocumentoRespaldo entity.
     *
     * @Route("/{id}", name="documentorespaldo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:DocumentoRespaldo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentoRespaldo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'documentorespaldo_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing DocumentoRespaldo entity.
     *
     * @Route("/{id}/edit", name="documentorespaldo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:DocumentoRespaldo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentoRespaldo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'documentorespaldo_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a DocumentoRespaldo entity.
    *
    * @param DocumentoRespaldo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DocumentoRespaldo $entity)
    {
        $form = $this->createForm(new DocumentoRespaldoType(), $entity, array(
            'action' => $this->generateUrl('documentorespaldo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DocumentoRespaldo entity.
     *
     * @Route("/{id}", name="documentorespaldo_update")
     * @Method("PUT")
     * @Template("VentaBundle:DocumentoRespaldo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:DocumentoRespaldo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DocumentoRespaldo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('documentorespaldo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'documentorespaldo_active' => 'active',
        );
    }
    /**
     * Deletes a DocumentoRespaldo entity.
     *
     * @Route("/{id}", name="documentorespaldo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:DocumentoRespaldo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DocumentoRespaldo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documentorespaldo'));
    }

    /**
     * Creates a form to delete a DocumentoRespaldo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentorespaldo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
