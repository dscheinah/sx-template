<?php

namespace Sx\Template\Template\Title;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;

class TitleCollectorFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return TitleCollector
     */
    public function create(Injector $injector, array $options, string $class): TitleCollector
    {
        $collector = $injector->get(Collector::class);
        assert($collector instanceof Collector);
        return new TitleCollector($collector);
    }
}
