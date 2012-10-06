<?php

namespace Defrag\PluploadBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder,
    Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 *
 * @author Michał Dąbrowski <dabrowski@brillante.pl>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('defrag_plupload');
        
         $rootNode
            ->children()
                ->scalarNode('upload_service')->isRequired()->cannotBeEmpty()->end()    
                ->scalarNode('orm_class')->isRequired()->cannotBeEmpty()->end()                
            ->end();

        return $treeBuilder;
    }
}
