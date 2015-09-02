<?php

namespace Digilife\CategoriesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoryName', 'text', array('label'=>'Edycja kategorii'))
            ->add('parentCategory','choice', array('label'=>'Parent caregory'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digilife\CategoriesBundle\Entity\Categories'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'digilife_categoriesbundle_categories';
    }
}
