<?php

namespace Sx\Template;

interface TextValueProviderInterface
{
    /**
     * Is called given a value from the PageValueProvider to get the real text content to output.
     *
     * @param mixed $value
     *
     * @return string
     */
    public function get(mixed $value): string;
}
