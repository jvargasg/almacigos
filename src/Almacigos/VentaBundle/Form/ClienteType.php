<?php

namespace Almacigos\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('rut')
            ->add('direccion')
            ->add('telefono')
            ->add('celular')
            ->add('email')            
            ->add('condicionVenta')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\VentaBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_ventabundle_cliente';
    }
}
