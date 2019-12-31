<?php
namespace LaminasBench\ServiceManager\BenchAsset;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\AbstractFactoryInterface;

class AbstractFactoryFoo implements AbstractFactoryInterface
{
    public function canCreateServiceWithName(ContainerInterface $container, $requestedName)
    {
        return ($requestedName === 'foo');
    }

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        if ($requestedName === 'foo') {
            return new Foo($options);
        }
        return false;
    }
}
