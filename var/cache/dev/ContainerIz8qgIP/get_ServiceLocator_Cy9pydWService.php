<?php

namespace ContainerIz8qgIP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cy9pydWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cy9pydW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cy9pydW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HistoireController::home' => ['privates', '.service_locator.77Jaequ', 'get_ServiceLocator_77JaequService', true],
            'App\\Controller\\HistoireController::page1' => ['privates', '.service_locator.77Jaequ', 'get_ServiceLocator_77JaequService', true],
            'App\\Controller\\HistoireController::showEndingPage' => ['privates', '.service_locator.96vbT2i', 'get_ServiceLocator_96vbT2iService', true],
            'App\\Controller\\HistoireController::showPage' => ['privates', '.service_locator.A3Zwdy6', 'get_ServiceLocator_A3Zwdy6Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HistoireController:home' => ['privates', '.service_locator.77Jaequ', 'get_ServiceLocator_77JaequService', true],
            'App\\Controller\\HistoireController:page1' => ['privates', '.service_locator.77Jaequ', 'get_ServiceLocator_77JaequService', true],
            'App\\Controller\\HistoireController:showEndingPage' => ['privates', '.service_locator.96vbT2i', 'get_ServiceLocator_96vbT2iService', true],
            'App\\Controller\\HistoireController:showPage' => ['privates', '.service_locator.A3Zwdy6', 'get_ServiceLocator_A3Zwdy6Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HistoireController::home' => '?',
            'App\\Controller\\HistoireController::page1' => '?',
            'App\\Controller\\HistoireController::showEndingPage' => '?',
            'App\\Controller\\HistoireController::showPage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HistoireController:home' => '?',
            'App\\Controller\\HistoireController:page1' => '?',
            'App\\Controller\\HistoireController:showEndingPage' => '?',
            'App\\Controller\\HistoireController:showPage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
