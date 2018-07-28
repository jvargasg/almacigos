<?php

namespace Almacigos\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SemillaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('producto')
            ->add('cantidad')
            ->add('germinacionEstimada')
            ->add('valorSemilla')            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\VentaBundle\Entity\Semilla'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_ventabundle_semilla';
    }
}
