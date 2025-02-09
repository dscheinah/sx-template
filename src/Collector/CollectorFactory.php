<?php

namespace Sx\Template\Collector;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;

class CollectorFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return Collector
     */
    public function create(Injector $injector, array $options, string $class): Collector
    {
        return new Collector();
    }
}
