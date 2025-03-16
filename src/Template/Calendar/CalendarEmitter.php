<?php

namespace Sx\Template\Template\Calendar;

use Sx\Template\CalendarValueProviderInterface;
use Sx\Template\Template\Calendar\DTO\CalendarEntryDTO;

class CalendarEmitter implements CalendarInterface
{
    /**
     * @var ?callable(CalendarEntryDTO):string
     */
    private mixed $renderNextCallback = null;

    /**
     * @var ?callable(CalendarEntryDTO):string
     */
    private mixed $renderListCallback = null;

    public function __construct(
        private readonly CalendarValueProviderInterface $calendarValueProvider,
    ) {
    }

    /**
     * Renders the next $count events using the render callback from renderNext.
     *
     * @param int $count
     *
     * @return string
     */
    public function next(int $count): string
    {
        if (!$this->renderNextCallback) {
            return '';
        }
        $output = '';
        foreach ($this->calendarValueProvider->calendar()->list as $entry) {
            $output .= ($this->renderNextCallback)($entry);
            if (--$count < 1) {
                break;
            }
        }
        return $output;
    }

    /**
     * Renders all events using the render callback from renderList.
     *
     * @return string
     */
    public function list(): string
    {
        if (!$this->renderListCallback) {
            return '';
        }
        $output = '';
        foreach ($this->calendarValueProvider->calendar()->list as $entry) {
            $output .= ($this->renderListCallback)($entry);
        }
        return $output;
    }

    /**
     * Must be used before calling next() to provide a render function.
     *
     * The render function will get the CalendarEntryDTO to render and should return a string.
     *
     * @param callable(CalendarEntryDTO):string $callback
     *
     * @return void
     */
    public function renderNext(callable $callback): void
    {
        $this->renderNextCallback = $callback;
    }

    /**
     * Must be used before calling list() to provide a render function.
     *
     * The render function will get the CalendarEntryDTO to render and should return a string.
     *
     * @param callable(CalendarEntryDTO):string $callback
     *
     * @return void
     */
    public function renderList(callable $callback): void
    {
        $this->renderListCallback = $callback;
    }
}
