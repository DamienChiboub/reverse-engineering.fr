<?php

namespace Site\ReverseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Type;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('texte')
            ->add('id2', 'integer',array(
		    'invalid_message_parameters' => array('%num%' => 6),
		    'invalid_message' => 'The value {{ value }} is not a valid {{ value.type }} type'))
            ->add('description')
            ->add('url')
            ->add('date')
            ->add('statut')
            ->add('state')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\ReverseBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'site_reversebundle_articletype';
    }
}
