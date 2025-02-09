<?php

namespace Sx\Template\Collector\DTO;

class CollectorSectionDTO
{
    /**
     * The heading of the section. Can be empty, if content was added but no section was started.
     *
     * @var string
     */
    public string $heading = '';

    /**
     * All contents added after the section was started.
     *
     * @var array<CollectorContentDTO>
     */
    public array $contents = [];
}
