<?php

namespace Sx\Template\Collector;

use Sx\Template\Collector\DTO\CollectorContentDTO;
use Sx\Template\Collector\DTO\CollectorDTO;
use Sx\Template\Collector\DTO\CollectorSectionDTO;

class Collector
{
    /**
     * Contains the collected data to be sent to the CMS frontend.
     *
     * @var CollectorDTO
     */
    public CollectorDTO $data;

    public function __construct() {
        $this->data = new CollectorDTO();
    }

    /**
     * Sets the global page title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->data->title = $title;
    }

    /**
     * Start a new section with a headline. All following calls to addContent are added to the last started section.
     *
     * @param string $heading
     *
     * @return void
     */
    public function beginSection(string $heading): void
    {
        $collectorSectionDTO = new CollectorSectionDTO();
        $collectorSectionDTO->heading = $heading;
        $this->data->sections[] = $collectorSectionDTO;
    }

    /**
     * Adds a new content entry to the last section.
     *
     * @param CollectorContentDTO $collectorContentDTO
     *
     * @return void
     */
    public function addContent(CollectorContentDTO $collectorContentDTO): void
    {
        if (!$this->data->sections) {
            $this->data->sections[] = new CollectorSectionDTO();
        }
        end($this->data->sections)->contents[] = $collectorContentDTO;
    }
}
