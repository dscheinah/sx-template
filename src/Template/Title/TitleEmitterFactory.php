<?php

namespace Sx\Template\Template\Title;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;

class TitleEmitterFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return TitleEmitter
     */
    public function create(Injector $injector, array $options, string $class): TitleEmitter
    {
        return new TitleEmitter();
    }
}
