<?php

namespace Site\ReverseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('date')
            ->add('statut')
            ->add('etat')
            ->add('description')
            ->add('url', 'url')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\ReverseBundle\Entity\Publication'
        ));
    }

    public function getName()
    {
        return 'site_reversebundle_publicationtype';
    }
}
