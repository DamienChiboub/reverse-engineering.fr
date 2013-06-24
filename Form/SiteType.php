<?php

namespace Site\ReverseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastUpdate')
            ->add('version')
            ->add('indexTitle')
            ->add('ArticleTitle')
            ->add('publicationTitle')
            ->add('submitTitle')
            ->add('warningTitle')
            ->add('aboutTitle')
            ->add('contactTitle')
            ->add('legalTitle')
            ->add('jobsTitle')
            ->add('securityTitle')
            ->add('serviceTitle')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\ReverseBundle\Entity\Site'
        ));
    }

    public function getName()
    {
        return 'site_reversebundle_sitetype';
    }
}
