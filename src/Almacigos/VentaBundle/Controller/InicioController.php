<?php

namespace Almacigos\VentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Almacigos\UsuarioBundle\Entity\Usuario;
use Almacigos\UsuarioBundle\Form\UsuarioType;

/**
 * Credito controller.
 *
 * @Route("/inicio")
 */
class InicioController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $user = new Usuario();
        $form   = $this->createCreateForm($user);

        return array(
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Usuario entity.
     *
     * @Route("/login", name="usuario_login")
     * @Template("VentaBundle:Inicio:login.html.twig")
     */
    public function loginAction(Request $request)
    {
        $user = new Usuario();        
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /*$em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UsuarioBundle:Usuario')->findBy(array(
                    'nombre' => $form->get('nombre')->getData(),
                    'pass' => $form->get('pass')->getData()
                ));
            if($entity)
                echo 'exito';
            else
            {
                echo 'error';
            }*/
            return $this->redirect($this->generateUrl('notaventa'));
        }

        return array(
                'form'   => $form->createView(),
            );  
    }

     /**
     * Creates a form to create a Usuario entity.
     *
     * @param Usuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Usuario $entity)
    {
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('usuario_login'),
            'method' => 'GET',
        ));

        $form->add('submit', 'submit', array('label' => 'Ingresar'));

        return $form;
    }

}
