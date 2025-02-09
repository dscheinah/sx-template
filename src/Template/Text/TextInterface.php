<?php

namespace Sx\Template\Template\Text;

interface TextInterface
{
    /**
     * Used to render a text with the given key. Use the label for the CMS user.
     *
     * @param string $key
     * @param string|null $label
     *
     * @return string
     */
    public function text(string $key, ?string $label = null): string;
}
