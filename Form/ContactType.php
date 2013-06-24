<?php

namespace Site\ReverseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', 'text', array('max_length' => 255, 'required' => 'required'))
            ->add('lastname', 'text', array('max_length' => 255, 'required' => 'required'))
            ->add('object', 'choice', array(
			'choices' => array(
			'' => '',
			'Bug' => 'Bug', 
			'Information' => 'Information',
			'Request' => 'Request',
			'Other' => 'Other',
						),
			'preferred_choices' => array(''),
	))
            ->add('message', 'textarea', array(
			 'attr' => array(
					'tabindex' => '5',
					'placeholder' => 'Your Message',
					'cols' => '30',
					'rows' => '8',
					),
		))
	;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\ReverseBundle\Entity\Contact'
        ));
    }

    public function getName()
    {
        return 'site_reversebundle_contacttype';
    }
}
