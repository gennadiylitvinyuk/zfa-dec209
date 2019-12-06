<?php
namespace Events\Model;

use Events\Entity\EventEntityInterface;
use Zend\EventManager\EventManager;
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Hydrator\ObjectProperty;
use Psr\Container\ContainerInterface;

class Base implements TableGatewayInterface
{
    public static $tableName;

    protected $tableGateway;
    
    protected $container;
    
    public function __construct(Adapter $adapter,
                                EventEntityInterface $entity,
                                ContainerInterface $container)
    {
        $resultSet = new HydratingResultSet(new ObjectProperty(), $entity);
        // sets up TableGateway to produce instances of get_class($entity) when queried
        $this->tableGateway = new TableGateway(static::$tableName, $adapter, NULL, $resultSet);
        $this->container = $container;
    }
}
