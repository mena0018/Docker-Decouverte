<?php

namespace Container5W2HcpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_ValidateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.validate' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\ValidateListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/ValidateListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Validator/Validator.php';

        return $container->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Symfony\EventListener\ValidateListener(new \ApiPlatform\Symfony\Validator\Validator(($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), $container), ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
