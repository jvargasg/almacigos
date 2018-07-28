<?php

namespace Almacigos\SiembraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiembraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siembra')
            ->add('dias')
            ->add('bandeja')
            ->add('cantidadSembrar')
            ->add('cantidadBandejas')            
            //->add('pedido')            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\SiembraBundle\Entity\Siembra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_siembrabundle_siembra';
    }
}
