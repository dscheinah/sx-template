<?php

namespace Sx\TemplateTest\Template\Text;

use PHPUnit\Framework\TestCase;
use Sx\Container\Injector;
use Sx\Template\PageValueProviderInterface;
use Sx\Template\Template\Text\TextEmitter;
use Sx\Template\Template\Text\TextEmitterFactory;
use Sx\Template\TextValueProviderInterface;

class TextEmitterFactoryTest extends TestCase
{
    public function testCreate(): void
    {
        $injector = new Injector();
        $injector->set(PageValueProviderInterface::class, $this->createMock(PageValueProviderInterface::class));
        $injector->set(TextValueProviderInterface::class, $this->createMock(TextValueProviderInterface::class));

        $factory = new TextEmitterFactory();
        self::assertInstanceOf(TextEmitter::class, $factory->create($injector, [], ''));
    }
}
