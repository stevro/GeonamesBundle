<?php

namespace Stev\GeonamesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('stev_geonames');

        $rootNode
                ->children()
                    ->scalarNode('username')
                        ->cannotBeEmpty()
                        ->isRequired()
                    ->end()
                    ->scalarNode('token')
                        ->defaultNull()
                    ->end()
                    ->booleanNode('use_public')
                        ->defaultTrue()
                    ->end()
                ->end();

        return $treeBuilder;
    }

}