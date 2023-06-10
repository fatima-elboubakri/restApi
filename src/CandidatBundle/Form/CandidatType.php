<?php

namespace CandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom_can')
            ->add('prenom_can')
            ->add('dn_can')
            ->add('genre')
            ->add('photo_can')
            ->add('adr_can')
            ->add('tel_can')
            ->add('email_can')
            ->add('titre_can')
          
            ->add('exp_can')
            ->add('comp_can')
            ->add('desc_cam')
            ->add('cv_can')
            ->add('netude_can')
            ->add('etat_can');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
       // 'data_class' => 'CandidatBundle\Entity\Candidat',
        $resolver->setDefaults(array(
            
            'csrf_protection' => false,
            'validation_groups' => false,
            'data_class' => 'CandidatBundle\Entity\Candidat'
        ));
    
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'candidatbundle_candidat';
    }


}
