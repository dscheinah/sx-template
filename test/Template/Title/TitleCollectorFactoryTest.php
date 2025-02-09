<?php

namespace Sx\TemplateTest\Template\Title;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\Template\Title\TitleCollector;
use Sx\Template\Template\Title\TitleCollectorFactory;

class TitleCollectorFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(Collector::class, $this->createMock(Collector::class));

        $factory = new TitleCollectorFactory();
        self::assertInstanceOf(TitleCollector::class, $factory->create($injector, [], ''));
    }
}
