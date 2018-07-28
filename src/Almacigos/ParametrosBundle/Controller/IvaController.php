<?php

namespace Almacigos\ParametrosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\ParametrosBundle\Entity\Iva;
use Almacigos\ParametrosBundle\Form\IvaType;

/**
 * Iva controller.
 *
 * @Route("/iva")
 */
class IvaController extends Controller
{

    /**
     * Lists all Iva entities.
     *
     * @Route("/", name="iva")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ParametrosBundle:Iva')->findAll();

        if ($entities){
            foreach ($entities as $e) {
                $iva['iva'] = $e->getIva();
                $iva['id'] = $e->getId();
            }
            $iva['hay_registros'] = true;
        }            
        else
            $iva['hay_registros'] = false;

        return array(
            'entity' => $iva,
        );
    }
    /**
     * Creates a new Iva entity.
     *
     * @Route("/", name="iva_create")
     * @Method("POST")
     * @Template("ParametrosBundle:Iva:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Iva();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('iva_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Iva entity.
     *
     * @param Iva $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Iva $entity)
    {
        $form = $this->createForm(new IvaType(), $entity, array(
            'action' => $this->generateUrl('iva_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Establecer'));

        return $form;
    }

    /**
     * Displays a form to create a new Iva entity.
     *
     * @Route("/new", name="iva_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Iva();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Iva entity.
     *
     * @Route("/{id}", name="iva_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ParametrosBundle:Iva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Iva entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        if ($entity){
            
                $iva['iva'] = $entity->getIva();
                $iva['id'] = $entity->getId();
           
            $iva['hay_registros'] = true;
        }            
        else
            $iva['hay_registros'] = false;

        return array(
            'entity'      => $iva,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Iva entity.
     *
     * @Route("/{id}/edit", name="iva_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ParametrosBundle:Iva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Iva entity.');
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
    * Creates a form to edit a Iva entity.
    *
    * @param Iva $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Iva $entity)
    {
        $form = $this->createForm(new IvaType(), $entity, array(
            'action' => $this->generateUrl('iva_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Iva entity.
     *
     * @Route("/{id}", name="iva_update")
     * @Method("PUT")
     * @Template("ParametrosBundle:Iva:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ParametrosBundle:Iva')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Iva entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('iva_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Iva entity.
     *
     * @Route("/{id}", name="iva_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ParametrosBundle:Iva')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Iva entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('iva'));
    }

    /**
     * Creates a form to delete a Iva entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('iva_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
