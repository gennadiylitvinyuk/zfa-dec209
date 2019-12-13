<?php

namespace Market\Initializer;

use Market\Controller\ListingsTableAwareInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

class ListingsTableInitializer implements InitializerInterface
{
    public function __invoke(ContainerInterface $container, $instance)
    {
        if (!$instance instanceof ListingsTableAwareInterface) {
            return;
        }

        $instance->setListingsTable($container->get('model-listings-table'));
    }
}