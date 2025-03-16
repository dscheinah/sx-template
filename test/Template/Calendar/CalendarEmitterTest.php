<?php

namespace Sx\TemplateTest\Template\Calendar;

use PHPUnit\Framework\MockObject\MockObject;
use Sx\Template\CalendarValueProviderInterface;
use Sx\Template\Template\Calendar\CalendarEmitter;
use PHPUnit\Framework\TestCase;
use Sx\Template\Template\Calendar\DTO\CalendarDTO;
use Sx\Template\Template\Calendar\DTO\CalendarEntryDTO;

class CalendarEmitterTest extends TestCase
{
    private CalendarEmitter $calendarEmitter;

    private MockObject $calenderValueProviderMock;

    protected function setUp(): void
    {
        $this->calenderValueProviderMock = $this->createMock(CalendarValueProviderInterface::class);
        $this->calendarEmitter = new CalendarEmitter($this->calenderValueProviderMock);
    }

    public function testNext(): void
    {
        $this->calendarEmitter->renderNext(fn (CalendarEntryDTO $entry) => $entry->title);

        $calendar = new CalendarDTO();
        $calendar->list[] = new CalendarEntryDTO();
        $calendar->list[] = new CalendarEntryDTO();
        $calendar->list[] = new CalendarEntryDTO();

        $calendar->list[0]->title = "1";
        $calendar->list[1]->title = "2";
        $calendar->list[2]->title = "3";

        $this->calenderValueProviderMock->expects($this->once())->method('calendar')->willReturn($calendar);

        self::assertEquals("12", $this->calendarEmitter->next(2));
    }

    public function testNextNoRenderCallback(): void
    {
        $this->calenderValueProviderMock->expects($this->never())->method('calendar');
        self::assertEmpty($this->calendarEmitter->next(2));
    }

    public function testList(): void
    {
        $this->calendarEmitter->renderList(fn (CalendarEntryDTO $entry) => $entry->title);

        $calendar = new CalendarDTO();
        $calendar->list[] = new CalendarEntryDTO();
        $calendar->list[] = new CalendarEntryDTO();
        $calendar->list[] = new CalendarEntryDTO();

        $calendar->list[0]->title = "1";
        $calendar->list[1]->title = "2";
        $calendar->list[2]->title = "3";

        $this->calenderValueProviderMock->expects($this->once())->method('calendar')->willReturn($calendar);

        self::assertEquals("123", $this->calendarEmitter->list());
    }

    public function testListNoRenderCallback(): void
    {
        $this->calenderValueProviderMock->expects($this->never())->method('calendar');
        self::assertEmpty($this->calendarEmitter->list());
    }
}
