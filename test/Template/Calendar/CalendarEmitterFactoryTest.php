<?php

namespace Sx\TemplateTest\Template\Calendar;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\CalendarValueProviderInterface;
use Sx\Template\Template\Calendar\CalendarEmitter;
use Sx\Template\Template\Calendar\CalendarEmitterFactory;

class CalendarEmitterFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(CalendarValueProviderInterface::class, $this->createMock(CalendarValueProviderInterface::class));

        $factory = new CalendarEmitterFactory();
        self::assertInstanceOf(CalendarEmitter::class, $factory->create($injector, [], ''));
    }
}
