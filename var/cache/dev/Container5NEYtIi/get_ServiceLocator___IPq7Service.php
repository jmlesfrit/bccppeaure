<?php

namespace Container5NEYtIi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator___IPq7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator...iPq_7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator...iPq_7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'acheteurRepository' => ['privates', 'App\\Repository\\AcheteurRepository', 'getAcheteurRepositoryService', true],
        ], [
            'acheteurRepository' => 'App\\Repository\\AcheteurRepository',
        ]);
    }
}
