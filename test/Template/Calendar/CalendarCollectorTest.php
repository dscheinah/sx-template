<?php

namespace Sx\TemplateTest\Template\Calendar;

use PHPUnit\Framework\MockObject\MockObject;
use Sx\Template\Collector\Collector;
use Sx\Template\Collector\DTO\CollectorContentDTO;
use Sx\Template\Template\Calendar\CalendarCollector;
use PHPUnit\Framework\TestCase;

class CalendarCollectorTest extends TestCase
{
    private CalendarCollector $calendarCollector;

    private MockObject $collectorMock;

    protected function setUp(): void
    {
        $this->collectorMock = $this->createMock(Collector::class);
        $this->calendarCollector = new CalendarCollector($this->collectorMock);
    }

    public function testNext(): void
    {
        $expectedContentDTO = new CollectorContentDTO();
        $expectedContentDTO->type = 'calendar';
        $expectedContentDTO->key = 'next';
        $expectedContentDTO->value = 42;

        $this->collectorMock->expects($this->once())->method('addContent')->with($expectedContentDTO);

        self::assertEmpty($this->calendarCollector->next(42));
    }

    public function testList(): void
    {
        $expectedContentDTO = new CollectorContentDTO();
        $expectedContentDTO->type = 'calendar';
        $expectedContentDTO->key = 'list';

        $this->collectorMock->expects($this->once())->method('addContent')->with($expectedContentDTO);

        self::assertEmpty($this->calendarCollector->list());
    }

    public function testRenderNext(): void
    {
        $this->expectNotToPerformAssertions();
        $this->calendarCollector->renderNext(fn () => '');
    }

    public function testRenderList(): void
    {
        $this->expectNotToPerformAssertions();
        $this->calendarCollector->renderList(fn () => '');
    }
}
