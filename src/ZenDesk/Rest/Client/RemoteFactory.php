<?php

namespace ZenDesk\Rest\Client;

use ProxyManager\Configuration;
use ProxyManager\Factory\RemoteObjectFactory;

use RestRemoteObject\Client\Rest;
use RestRemoteObject\Adapter\Rest as RestAdapter;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use ZenDesk\ProxyManager\Inflector\ClassNameInflector;

class RemoteFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $client = $serviceLocator->get('ZenDesk\Rest\Client');

        $configuration = new Configuration();
        $configuration->setProxiesTargetDir(__DIR__ . '/../../../../data/cache/proxy-manager/');
        $configuration->setClassNameInflector(new ClassNameInflector($configuration->getProxiesNamespace()));
        spl_autoload_register($configuration->getProxyAutoloader());

        $factory = new RemoteObjectFactory(
            new RestAdapter($client), $configuration
        );

        return $factory;
    }
}
