<?php

namespace Sx\Template\Template\Section;

class SectionEmitter implements SectionInterface
{
    /**
     * Simply returns the given headline for rendering.
     *
     * @param string $heading
     *
     * @return string
     */
    public function section(string $heading): string
    {
        return $heading;
    }
}
