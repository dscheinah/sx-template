<?php

namespace Sx\TemplateTest\Template\Section;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\Template\Section\SectionCollector;
use Sx\Template\Template\Section\SectionCollectorFactory;

class SectionCollectorFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(Collector::class, $this->createMock(Collector::class));

        $factory = new SectionCollectorFactory();
        self::assertInstanceOf(SectionCollector::class, $factory->create($injector, [], ''));
    }
}
