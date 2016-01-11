<?php

namespace NowyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AktywacjaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('od','date',['widget' => 'single_text',
    'format' => 'dd-MM-yyyy',
    'attr' => [
        'class' => 'form-control input-inline datepicker',
        'data-provide' => 'datepicker',
        'data-date-format' => 'dd-mm-yyyy',
        ]]
   )
            ->add('aktywacja','date',['widget' => 'single_text',
    'format' => 'dd-MM-yyyy',
    'attr' => [
        'class' => 'form-control input-inline datepicker',
        'data-provide' => 'datepicker',
        'data-date-format' => 'dd-mm-yyyy']])
            ->add('do','date',['widget' => 'single_text',
    'format' => 'dd-MM-yyyy',
    'attr' => [
        'class' => 'form-control input-inline datepicker',
        'data-provide' => 'datepicker',
        'data-date-format' => 'dd-mm-yyyy']])
            ->add('nrtelefon')
            ->add('package')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NowyBundle\Entity\Aktywacja'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nowybundle_aktywacja';
    }
}
