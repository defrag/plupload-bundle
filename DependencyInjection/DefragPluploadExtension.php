<?php

namespace Defrag\PluploadBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\Config\FileLocator,
    Symfony\Component\HttpKernel\DependencyInjection\Extension,
    Symfony\Component\DependencyInjection\Loader;


/**
 *
 * @author Michał Dąbrowski <dabrowski@brillante.pl>
 */
class DefragPluploadExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('twig.form.resources', array_merge(
            $container->getParameter('twig.form.resources'),
            array('DefragPluploadBundle:Form:plupload_widget.html.twig')
        ));

        $container->setAlias('defrag_plupload.upload_service', $config['upload_service']);
        $container->setParameter('defrag_plupload.orm_class', $config['orm_class']);


        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
