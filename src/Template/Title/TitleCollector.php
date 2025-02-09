<?php

namespace Sx\Template\Template\Title;

use Sx\Template\Collector\Collector;

class TitleCollector implements TitleInterface
{
    public function __construct(
        private readonly Collector $collector,
    ) {
    }

    /**
     * Collects the title to be shown in the CMS.
     *
     * @param string $title
     *
     * @return void
     */
    public function set(string $title): void
    {
        $this->collector->setTitle($title);
    }

    /**
     * Noop, because no output in CMS needed.
     *
     * @return string
     */
    public function title(): string
    {
        return '';
    }
}
