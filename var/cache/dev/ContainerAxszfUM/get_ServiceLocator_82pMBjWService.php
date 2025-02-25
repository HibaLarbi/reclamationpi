<?php

namespace ContainerAxszfUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_82pMBjWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.82pMBjW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.82pMBjW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ReclamationRepository' => ['privates', 'App\\Repository\\ReclamationRepository', 'getReclamationRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'ReclamationRepository' => 'App\\Repository\\ReclamationRepository',
            'doctrine' => '?',
        ]);
    }
}
