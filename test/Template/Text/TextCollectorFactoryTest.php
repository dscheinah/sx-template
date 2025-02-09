<?php

namespace Sx\TemplateTest\Template\Text;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\PageValueProviderInterface;
use Sx\Template\Template\Text\TextCollector;
use Sx\Template\Template\Text\TextCollectorFactory;

class TextCollectorFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(Collector::class, $this->createMock(Collector::class));
        $injector->set(PageValueProviderInterface::class, $this->createMock(PageValueProviderInterface::class));

        $factory = new TextCollectorFactory();
        self::assertInstanceOf(TextCollector::class, $factory->create($injector, [], ''));
    }
}
