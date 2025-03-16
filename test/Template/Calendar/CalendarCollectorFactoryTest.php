<?php

namespace Sx\TemplateTest\Template\Calendar;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\Template\Calendar\CalendarCollector;
use Sx\Template\Template\Calendar\CalendarCollectorFactory;

class CalendarCollectorFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(Collector::class, $this->createMock(Collector::class));

        $factory = new CalendarCollectorFactory();
        self::assertInstanceOf(CalendarCollector::class, $factory->create($injector, [], ''));
    }
}
