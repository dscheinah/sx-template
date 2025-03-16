<?php

namespace Sx\Template\Template\Calendar;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;

class CalendarCollectorFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return CalendarCollector
     */
    public function create(Injector $injector, array $options, string $class): CalendarCollector
    {
        $collector = $injector->get(Collector::class);
        assert($collector instanceof Collector);
        return new CalendarCollector($collector);
    }
}
