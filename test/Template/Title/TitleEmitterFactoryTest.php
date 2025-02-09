<?php

namespace Sx\TemplateTest\Template\Title;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\Template\Title\TitleEmitter;
use Sx\Template\Template\Title\TitleEmitterFactory;

class TitleEmitterFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $factory = new TitleEmitterFactory();
        self::assertInstanceOf(TitleEmitter::class, $factory->create(new Injector(), [], ''));
    }
}
