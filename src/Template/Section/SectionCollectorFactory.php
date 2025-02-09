<?php

namespace Sx\Template\Template\Section;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;

class SectionCollectorFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return SectionCollector
     */
    public function create(Injector $injector, array $options, string $class): SectionCollector
    {
        $collector = $injector->get(Collector::class);
        assert($collector instanceof Collector);
        return new SectionCollector($collector);
    }
}
