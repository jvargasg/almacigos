<?php

namespace Almacigos\VentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iva')
            ->add('porcentajeDelTotal')
            ->add('condicionVenta')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\VentaBundle\Entity\Contado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_ventabundle_contado';
    }
}
