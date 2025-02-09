<?php

namespace Sx\Template\Template\Title;

interface TitleInterface
{
    /**
     * Use this to globally set the page title. You need to call title later to output it.
     *
     * @param string $title
     *
     * @return void
     */
    public function set(string $title): void;

    /**
     * Used to output the title that was set before.
     *
     * @return string
     */
    public function title(): string;
}
