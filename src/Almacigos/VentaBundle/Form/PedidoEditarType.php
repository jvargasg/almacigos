<?php

namespace Almacigos\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PedidoEditarType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->add('producto')
            ->add('cantidadSolicitada')
            ->add('neto')
            ->add('total')
            ->add('fechaDespacho')
            ->add('estado')                        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\VentaBundle\Entity\Pedido'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_ventabundle_pedido';
    }
}
