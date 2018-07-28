<?php

namespace Almacigos\SiembraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Almacigos\SiembraBundle\Entity\Bandeja;
use Almacigos\SiembraBundle\Form\BandejaType;

/**
 * Bandeja controller.
 *
 * @Route("/bandeja")
 */
class BandejaController extends Controller
{

    /**
     * Lists all Bandeja entities.
     *
     * @Route("/", name="bandeja")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiembraBundle:Bandeja')->findAll();

        return array(
            'entities' => $entities,
            'bandeja_active' => 'active',
        );
    }
    /**
     * Creates a new Bandeja entity.
     *
     * @Route("/", name="bandeja_create")
     * @Method("POST")
     * @Template("SiembraBundle:Bandeja:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Bandeja();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bandeja_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'bandeja_active' => 'active',
        );
    }

    /**
     * Creates a form to create a Bandeja entity.
     *
     * @param Bandeja $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bandeja $entity)
    {
        $form = $this->createForm(new BandejaType(), $entity, array(
            'action' => $this->generateUrl('bandeja_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bandeja entity.
     *
     * @Route("/new", name="bandeja_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bandeja();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'bandeja_active' => 'active',
        );
    }

    /**
     * Finds and displays a Bandeja entity.
     *
     * @Route("/{id}", name="bandeja_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Bandeja')->find($id);

        $ubicaciones = $em->getRepository('SiembraBundle:UbicacionBandeja')->findBy(array(
                'bandeja' => $id
            ));

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bandeja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'ubicaciones' => $ubicaciones,
            'delete_form' => $deleteForm->createView(),
            'bandeja_active' => 'active',
        );
    }

    /**
     * Displays a form to edit an existing Bandeja entity.
     *
     * @Route("/{id}/edit", name="bandeja_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Bandeja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bandeja entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'bandeja_active' => 'active',
        );
    }

    /**
    * Creates a form to edit a Bandeja entity.
    *
    * @param Bandeja $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bandeja $entity)
    {
        $form = $this->createForm(new BandejaType(), $entity, array(
            'action' => $this->generateUrl('bandeja_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Bandeja entity.
     *
     * @Route("/{id}", name="bandeja_update")
     * @Method("PUT")
     * @Template("SiembraBundle:Bandeja:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiembraBundle:Bandeja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bandeja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bandeja_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'bandeja_active' => 'active',
        );
    }
    /**
     * Deletes a Bandeja entity.
     *
     * @Route("/{id}", name="bandeja_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiembraBundle:Bandeja')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bandeja entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bandeja'));
    }

    /**
     * Creates a form to delete a Bandeja entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bandeja_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
