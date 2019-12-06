<?php
namespace PrivateMessages\Model\Factory;

use PrivateMessages\Model\ {Message, MessagesTable};

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class MessagesTableFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = NULL)
    {
        return new MessagesTable($container->get('model-primary-adapter'));
    }
}
