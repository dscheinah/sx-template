<?php

namespace Sx\Template\Template\Title;

class TitleEmitter implements TitleInterface
{
    private string $title = '';

    /**
     * Sets the title to output.
     *
     * @param string $title
     *
     * @return void
     */
    public function set(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Outputs the set title.
     *
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }
}
