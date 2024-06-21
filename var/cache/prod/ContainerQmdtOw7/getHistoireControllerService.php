<?php

namespace ContainerQmdtOw7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHistoireControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HistoireController' shared autowired service.
     *
     * @return \App\Controller\HistoireController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HistoireController'] = $instance = new \App\Controller\HistoireController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'twig' => ['privates', 'twig', 'getTwigService', true],
        ], [
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\HistoireController', $container));

        return $instance;
    }
}