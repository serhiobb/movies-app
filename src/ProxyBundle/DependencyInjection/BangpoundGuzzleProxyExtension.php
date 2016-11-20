<?php

namespace ProxyBundle\DependencyInjection;

use Bangpound\Bundle\GuzzleProxyBundle\DependencyInjection\BangpoundGuzzleProxyExtension;
use Bangpound\Bundle\GuzzleProxyBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ProxyExtension extends BangpoundGuzzleProxyExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

//        $name = get_class($this);$pos = strrpos($name, '\\');if(false !== $pos) $name = substr($name, $pos + 1);
//        $serviceBaseName = preg_replace('/.+\\\\(.[^\\\\]+)Extension$/','$1', __CLASS__);
        foreach($config['endpoints'] as $name => $params){
            $def = new Definition('GuzzleHttp\Client', [$params]);
            $serviceName = 'bangpound_guzzle_proxy.client.' . $name;
            $container->addDefinitions([$serviceName => $def]);
        }

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
