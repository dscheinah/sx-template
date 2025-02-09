<?php

namespace Sx\Template\Collector\DTO;

class CollectorContentDTO
{
    /**
     * The type will be used to render the correct selection in the frontend.
     *
     * @var string
     */
    public string $type;

    /**
     * The key given by the template.
     *
     * @var string
     */
    public string $key;

    /**
     * The current selected value used for the value providers.
     *
     * This is usually an identifier and null, if no content was selected.
     *
     * @var mixed
     */
    public mixed $value;

    /**
     * The label to render in the frontend when showing the content selection.
     *
     * @var string|null
     */
    public ?string $label;
}
