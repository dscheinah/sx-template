<?php

namespace Sx\Template\Template\Calendar;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\CalendarValueProviderInterface;

class CalendarEmitterFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return CalendarEmitter
     */
    public function create(Injector $injector, array $options, string $class): CalendarEmitter
    {
        $calendarValueProvider = $injector->get(CalendarValueProviderInterface::class);
        assert($calendarValueProvider instanceof CalendarValueProviderInterface);
        return new CalendarEmitter($calendarValueProvider);
    }
}
