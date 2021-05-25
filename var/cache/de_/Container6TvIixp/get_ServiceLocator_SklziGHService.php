<?php

namespace Container6TvIixp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SklziGHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SklziGH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SklziGH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AcheteurController::delete' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\AcheteurController::edit' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\AcheteurController::index' => ['privates', '.service_locator...iPq_7', 'get_ServiceLocator___IPq7Service', true],
            'App\\Controller\\AcheteurController::show' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController::edit' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.2Iz0l6.', 'get_ServiceLocator_2Iz0l6_Service', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\VenteController::delete' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'App\\Controller\\VenteController::edit' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'App\\Controller\\VenteController::index' => ['privates', '.service_locator.KDXZUyG', 'get_ServiceLocator_KDXZUyGService', true],
            'App\\Controller\\VenteController::show' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AcheteurController:delete' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\AcheteurController:edit' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\AcheteurController:index' => ['privates', '.service_locator...iPq_7', 'get_ServiceLocator___IPq7Service', true],
            'App\\Controller\\AcheteurController:show' => ['privates', '.service_locator.xMQ4koJ', 'get_ServiceLocator_XMQ4koJService', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController:edit' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.2Iz0l6.', 'get_ServiceLocator_2Iz0l6_Service', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\VenteController:delete' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'App\\Controller\\VenteController:edit' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'App\\Controller\\VenteController:index' => ['privates', '.service_locator.KDXZUyG', 'get_ServiceLocator_KDXZUyGService', true],
            'App\\Controller\\VenteController:show' => ['privates', '.service_locator.1GjiQzs', 'get_ServiceLocator_1GjiQzsService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AcheteurController::delete' => '?',
            'App\\Controller\\AcheteurController::edit' => '?',
            'App\\Controller\\AcheteurController::index' => '?',
            'App\\Controller\\AcheteurController::show' => '?',
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::edit' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\VenteController::delete' => '?',
            'App\\Controller\\VenteController::edit' => '?',
            'App\\Controller\\VenteController::index' => '?',
            'App\\Controller\\VenteController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AcheteurController:delete' => '?',
            'App\\Controller\\AcheteurController:edit' => '?',
            'App\\Controller\\AcheteurController:index' => '?',
            'App\\Controller\\AcheteurController:show' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:edit' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\VenteController:delete' => '?',
            'App\\Controller\\VenteController:edit' => '?',
            'App\\Controller\\VenteController:index' => '?',
            'App\\Controller\\VenteController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}