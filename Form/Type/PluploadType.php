<?php

namespace Defrag\PluploadBundle\Form\Type;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilderInterface,
    Symfony\Component\Form\FormView,
    Symfony\Component\Form\FormInterface,
    Symfony\Component\OptionsResolver\OptionsResolverInterface,
    Symfony\Component\DependencyInjection\ContainerInterface;


/**
 *
 * @author Michał Dąbrowski <dabrowski@brillante.pl>
 */
class PluploadType extends AbstractType
{
    
    private $_container;

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        
        return parent::buildView($view, $form, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'    => $this->_container->getParameter('defrag_plupload.orm_class'),
            'expanded' => true,
            'multiple' => true,
        ));
    }


    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'plupload';
    }

    public function setContainer(ContainerInterface $container)
    {
        $this->_container = $container;
    }
    
    public function getContainer()
    {
        return $this->_container;
    }
}
