<?php
namespace AccessControl\Acl\Factory;

use AccessControl\Acl\MarketAcl;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class MarketAclFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = NULL)
    {
        $config = $container->get('Config')['access-control-Config'];
        $acl = new MarketAcl($config, $container);
        return $acl;
    }
}
