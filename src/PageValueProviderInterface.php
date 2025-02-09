<?php

namespace Sx\Template;

interface PageValueProviderInterface
{
    /**
     * Is called to get the stored selected value for a template. Usually this will be an identifier.
     *
     * The value will be displayed in the CMS and used to retrieve the real data from another provider.
     *
     * @param string $type
     * @param string $key
     *
     * @return mixed
     */
    public function get(string $type, string $key): mixed;
}
