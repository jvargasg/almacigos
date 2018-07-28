<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\VentaBundle\Entity\Contado;
use Almacigos\VentaBundle\Form\ContadoType;

/**
 * Contado controller.
 *
 * @Route("/contado")
 */
class ContadoController extends Controller
{

    /**
     * Lists all Contado entities.
     *
     * @Route("/", name="contado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentaBundle:Contado')->findAll();

        return array(
            'entities' => $entities,
            'contado_active' => 'active',
        );
    }
    /**
     * Creates a new Contado entity.
     *
     * @Route("/", name="contado_create")
     * @Method("POST")
     * @Template("VentaBundle:Contado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Contado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'contado_active' => 'active',
        );
    }

    /**
     * Creates a form to create a Contado entity.
     *
     * @param Contado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contado $entity)
    {
        $form = $this->createForm(new ContadoType(), $entity, array(
            'action' => $this->generateUrl('contado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Contado entity.
     *
     * @Route("/new", name="contado_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Contado();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'contado_active' => 'active',
        );
    }

    /**
     * Finds and displays a Contado entity.
     *
     * @Route("/{id}", name="contado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Contado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'contado_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing Contado entity.
     *
     * @Route("/{id}/edit", name="contado_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Contado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'contado_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a Contado entity.
    *
    * @param Contado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contado $entity)
    {
        $form = $this->createForm(new ContadoType(), $entity, array(
            'action' => $this->generateUrl('contado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Contado entity.
     *
     * @Route("/{id}", name="contado_update")
     * @Method("PUT")
     * @Template("VentaBundle:Contado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentaBundle:Contado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'contado_active' => 'active',
        );
    }
    /**
     * Deletes a Contado entity.
     *
     * @Route("/{id}", name="contado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentaBundle:Contado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contado'));
    }

    /**
     * Creates a form to delete a Contado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
