<?php

namespace Sx\Template\Template\Calendar;

use Sx\Template\Template\Calendar\DTO\CalendarEntryDTO;

interface CalendarInterface
{
    /**
     * Use this to render the next $count calendar entries.
     *
     * Provide a render callback by calling renderNext() first.
     *
     * @param int $count
     *
     * @return string
     */
    public function next(int $count): string;

    /**
     * Use this to render the all calendar entries.
     *
     * Provide a render callback by calling renderList() first.
     *
     * @return string
     */
    public function list(): string;

    /**
     * Provide a render callback to be used within next() for each entry.
     *
     * The callback will get the CalendarEntryDTO to render and should return a string.
     *
     * @param callable(CalendarEntryDTO):string $callback
     *
     * @return void
     */
    public function renderNext(callable $callback): void;

    /**
     * Provide a render callback to be used within list() for each entry.
     *
     * The callback will get the CalendarEntryDTO to render and should return a string.
     *
     * @param callable(CalendarEntryDTO):string $callback
     *
     * @return void
     */
    public function renderList(callable $callback): void;
}
