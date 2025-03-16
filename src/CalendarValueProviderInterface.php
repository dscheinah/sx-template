<?php

namespace Sx\Template;

use Sx\Template\Template\Calendar\DTO\CalendarDTO;

interface CalendarValueProviderInterface
{
    /**
     * Is called by the emitter before rendering any calendar entries.
     *
     * This must be implemented to return all relevant calendar entries in order.
     *
     * @return CalendarDTO
     */
    public function calendar(): CalendarDTO;
}
