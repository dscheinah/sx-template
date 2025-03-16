<?php

namespace Sx\Template\Template\Calendar;

use Sx\Template\Collector\Collector;
use Sx\Template\Collector\DTO\CollectorContentDTO;

class CalendarCollector implements CalendarInterface
{
    public function __construct(
        private readonly Collector $collector,
    ) {
    }

    /**
     * Adds a new content to the current section.
     *
     * The key is next and is used for translation in the CMS. The value holds the given count.
     *
     * @param int $count
     *
     * @return string
     */
    public function next(int $count): string
    {
        $collectorContentDTO = new CollectorContentDTO();
        $collectorContentDTO->type = 'calendar';
        $collectorContentDTO->key = __FUNCTION__;
        $collectorContentDTO->value = $count;
        $this->collector->addContent($collectorContentDTO);
        return '';
    }

    /**
     * Adds a new content to the current section.
     *
     * The key is next and is used for translation in the CMS.
     *
     * @return string
     */
    public function list(): string
    {
        $collectorContentDTO = new CollectorContentDTO();
        $collectorContentDTO->type = 'calendar';
        $collectorContentDTO->key = __FUNCTION__;
        $this->collector->addContent($collectorContentDTO);
        return '';
    }

    /**
     * Noop, because no output in CMS needed.
     *
     * @param callable $callback
     *
     * @return void
     */
    public function renderNext(callable $callback): void
    {
    }

    /**
     * Noop, because no output in CMS needed.
     *
     * @param callable $callback
     *
     * @return void
     */
    public function renderList(callable $callback): void
    {
    }
}
