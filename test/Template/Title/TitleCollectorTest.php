<?php

namespace Sx\TemplateTest\Template\Title;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sx\Template\Collector\Collector;
use Sx\Template\Template\Title\TitleCollector;

class TitleCollectorTest extends TestCase
{
    private TitleCollector $titleCollector;

    private MockObject $collectorMock;

    protected function setUp(): void
    {
        $this->collectorMock = $this->createMock(Collector::class);
        $this->titleCollector = new TitleCollector($this->collectorMock);
    }

    public function testTitle(): void
    {
        self::assertEmpty($this->titleCollector->title());
    }

    public function testSet(): void
    {
        $title = 'test title';

        $this->collectorMock->expects($this->once())->method('setTitle')->with($title);

        $this->titleCollector->set($title);
    }
}
