<?php

namespace Sx\Template\Template\Section;

interface SectionInterface
{
    /**
     * Used to render a section headline.
     *
     * @param string $heading
     *
     * @return string
     */
    public function section(string $heading): string;
}
