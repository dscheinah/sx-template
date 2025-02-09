<?php

namespace Sx\TemplateTest\Template\Section;

use PHPUnit\Framework\TestCase;
use Sx\Template\Template\Section\SectionEmitter;

class SectionEmitterTest extends TestCase
{
    public function testSection(): void
    {
        $heading = 'test heading';
        $sectionEmitter = new SectionEmitter();
        self::assertSame($heading, $sectionEmitter->section($heading));
    }
}
