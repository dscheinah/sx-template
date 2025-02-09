<?php

namespace Sx\TemplateTest\Template\Title;

use PHPUnit\Framework\TestCase;
use Sx\Template\Template\Title\TitleEmitter;

class TitleEmitterTest extends TestCase
{
    public function test(): void
    {
        $title = 'test title';
        $emitter = new TitleEmitter();
        $emitter->set($title);
        self::assertEquals($title, $emitter->title());
    }
}
