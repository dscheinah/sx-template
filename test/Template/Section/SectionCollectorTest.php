<?php

namespace Sx\TemplateTest\Template\Section;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sx\Template\Collector\Collector;
use Sx\Template\Template\Section\SectionCollector;

class SectionCollectorTest extends TestCase
{
    private SectionCollector $sectionCollector;

    private MockObject $collectorMock;

    protected function setUp(): void
    {
        $this->collectorMock = $this->createMock(Collector::class);
        $this->sectionCollector = new SectionCollector($this->collectorMock);
    }

    public function testSection(): void
    {
        $heading = 'test heading';

        $this->collectorMock->expects($this->once())->method('beginSection')->with($heading);

        self::assertEmpty($this->sectionCollector->section($heading));
    }
}
