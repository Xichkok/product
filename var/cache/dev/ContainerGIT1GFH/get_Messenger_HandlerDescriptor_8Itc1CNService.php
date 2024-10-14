<?php

namespace ContainerGIT1GFH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_8Itc1CNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.8Itc1CN' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/MessageHandler/ProductMessageHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ProductService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/DataBaseService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['.messenger.handler_descriptor.8Itc1CN'])) {
            return $container->privates['.messenger.handler_descriptor.8Itc1CN'];
        }

        return $container->privates['.messenger.handler_descriptor.8Itc1CN'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\MessageHandler\ProductMessageHandler(new \App\Service\ProductService(($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService'))), ($container->privates['App\\Service\\ElasticService'] ?? $container->load('getElasticServiceService')), new \App\Service\DataBaseService($a)), []);
    }
}
