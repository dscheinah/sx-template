<?php

namespace Sx\Template\Template\Section;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;

class SectionEmitterFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return SectionEmitter
     */
    public function create(Injector $injector, array $options, string $class): SectionEmitter
    {
        return new SectionEmitter();
    }
}
