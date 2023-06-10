<?php

namespace DocumentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom_document')->add('nom_dest')->add('date_doc')->add('objet_doc')->add('contenu_doc')->add('oran_doc')->add('logo_doc')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(

            'csrf_protection' => false,
            'validation_groups' => false,
            'data_class' => 'DocumentBundle\Entity\Document',
            'allow_extra_fields' => true

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'documentbundle_document';
    }


}
