<?php

namespace Sx\Template\Template\Calendar\DTO;

use DateTime;

class CalendarEntryDTO
{
    /**
     * The date of the calendar entry. The time should be ignored and used from $time instead.
     *
     * @var DateTime
     */
    public DateTime $date;

    /**
     * If a time is given, this property should be filled. The date should be ignored and used from $date instead.
     *
     * @var DateTime|null
     */
    public ?DateTime $time = null;

    /**
     * The optional place of the event.
     *
     * @var string|null
     */
    public ?string $place = null;

    /**
     * The (short) title to render as a headline.
     *
     * @var string
     */
    public string $title;

    /**
     * Can hold some more words to be rendered as additional information.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Is filled with an external link for even more information if given.
     *
     * @var string|null
     */
    public ?string $link = null;
}
