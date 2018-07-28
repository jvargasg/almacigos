<?php

namespace Almacigos\ParametrosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FechaSiembraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siembraVerano','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('despachoVerano','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('siembraOtonio','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('despachoOtonio','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('siembraInvierno','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('despachoInvierno','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('siembraPrimavera','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
            ->add('despachoPrimavera','date', array(
                'label' => false,
                'widget' => 'single_text',
                'format' => 'd/M/y',
                'read_only' => true,
                'attr'   => array('class' => 'date', 'placeholder' => 'Ingrese fecha'))
                )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\ParametrosBundle\Entity\FechaSiembra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_parametrosbundle_fechasiembra';
    }
}
