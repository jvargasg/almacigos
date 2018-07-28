<?php

namespace Almacigos\SiembraBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UbicacionBandejaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('bandeja')
            ->add('tipoUbicacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Almacigos\SiembraBundle\Entity\UbicacionBandeja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'almacigos_siembrabundle_ubicacionbandeja';
    }
}
