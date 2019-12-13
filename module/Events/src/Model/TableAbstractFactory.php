<?php

namespace Events\Model;

use Events\Entity\Attendee;
use Events\Entity\Event;
use Events\Entity\Registration;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;
use Interop\Container\ContainerInterface;

class TableAbstractFactory implements AbstractFactoryInterface
{
    protected $entities = [
        AttendeeTable::class => Attendee::class,
        EventTable::class => Event::class,
        RegistrationTable::class => Registration::class
    ];

    public function canCreate(ContainerInterface $container, $requestedName)
    {
        return isset($this->entities[$requestedName]);
    }

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new $requestedName(
            $container->get('events-db-adapter'),
            $container->get($this->entities[$requestedName]),
            $container
        );
    }

}