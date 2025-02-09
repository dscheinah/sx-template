<?php

namespace Sx\TemplateTest\Collector;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\Collector\CollectorFactory;

class CollectorFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $factory = new CollectorFactory();
        self::assertInstanceOf(Collector::class, $factory->create(new Injector(), [], ''));
    }
}
