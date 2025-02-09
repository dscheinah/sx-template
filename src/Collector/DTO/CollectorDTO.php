<?php

namespace Sx\Template\Collector\DTO;

class CollectorDTO
{
    /**
     * Contains the pages title. Can be empty if no title was registered.
     *
     * @var string
     */
    public string $title = '';

    /**
     * Contains all started sections with its contents.
     *
     * @var array<CollectorSectionDTO>
     */
    public array $sections = [];
}
