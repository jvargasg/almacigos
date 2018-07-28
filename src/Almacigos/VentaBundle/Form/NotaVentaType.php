<?php

namespace Almacigos\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NotaVentaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliente')
            ->add('numero','text',array(
                    'attr' => array('placeholder' => 'Ingrese número correspondiente')
                ))
            ->add('notas', 'textarea',array(
                    'attr' => array('placeholder' => 'Ingrese información que detalle la nota de venta')
                ))
            ->add('datosDespacho', 'textarea',array(
                    'attr' => array('placeholder' => 'Ingrese detalles para despacho')
                ))
            ->add('abono','text',array(
                    'attr' => array('placeholder' => 'Ingrese la cantidad abonada'),
                    'required' => false,
                ))
            ->add('fechaAbono','date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )                        
            ->add('condicionVenta')            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\VentaBundle\Entity\NotaVenta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_ventabundle_notaventa';
    }
}
