<?php

namespace Sx\TemplateTest\Template\Section;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Template\Section\SectionEmitter;
use Sx\Template\Template\Section\SectionEmitterFactory;

class SectionEmitterFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $factory = new SectionEmitterFactory();
        self::assertInstanceOf(SectionEmitter::class, $factory->create(new Injector(), [], ''));
    }
}
