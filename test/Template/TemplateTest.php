<?php

namespace Sx\TemplateTest\Template;

use PHPUnit\Framework\TestCase;
use Sx\Template\Template\Template;

class TemplateTest extends TestCase
{
    public function test(): void
    {
        $instance = new StubImplementation();
        Template::set(StubInterface::class, $instance);
        self::assertSame($instance, Template::get(StubInterface::class));
    }
}
