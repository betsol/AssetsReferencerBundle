<?php

namespace Betsol\Bundle\AssetsReferencerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration class.
 *
 * @author Slava Fomin II <s.fomin@betsol.ru>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('assets_referencer');

        $rootNode
            ->children()
            ->scalarNode('base_url')
                ->defaultValue('/')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}