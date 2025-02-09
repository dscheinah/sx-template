<?php

namespace Sx\TemplateTest\Container;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\Container\TemplateProvider;
use Sx\Template\Template\Section\SectionCollector;
use Sx\Template\Template\Section\SectionEmitter;
use Sx\Template\Template\Text\TextCollector;
use Sx\Template\Template\Text\TextEmitter;
use Sx\Template\Template\Title\TitleCollector;
use Sx\Template\Template\Title\TitleEmitter;

class TemplateProviderTest extends TestCase
{
    public function testProvide(): void
    {
        $injector = new Injector();
        (new TemplateProvider())->provide($injector);
        self::assertTrue($injector->has(Collector::class));
        self::assertTrue($injector->has(SectionCollector::class));
        self::assertTrue($injector->has(SectionEmitter::class));
        self::assertTrue($injector->has(TextCollector::class));
        self::assertTrue($injector->has(TextEmitter::class));
        self::assertTrue($injector->has(TitleCollector::class));
        self::assertTrue($injector->has(TitleEmitter::class));
    }
}
