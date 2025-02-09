<?php

namespace Sx\Template\Template\Section;

use Sx\Template\Collector\Collector;

class SectionCollector implements SectionInterface
{
    public function __construct(
        private readonly Collector $collector,
    ) {
    }

    /**
     * Starts a new section. All following content will be clustered for the CMS.
     *
     * @param string $heading
     *
     * @return string
     */
    public function section(string $heading): string
    {
        $this->collector->beginSection($heading);
        return '';
    }
}
