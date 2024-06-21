<?php

namespace ContainerEMkOGK0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_77JaequService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.77Jaequ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.77Jaequ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'histoireRepository' => ['privates', 'App\\Repository\\HistoireRepository', 'getHistoireRepositoryService', true],
        ], [
            'histoireRepository' => 'App\\Repository\\HistoireRepository',
        ]);
    }
}
