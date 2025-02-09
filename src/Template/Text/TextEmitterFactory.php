<?php

namespace Sx\Template\Template\Text;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\PageValueProviderInterface;
use Sx\Template\TextValueProviderInterface;

class TextEmitterFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return TextEmitter
     */
    public function create(Injector $injector, array $options, string $class): TextEmitter
    {
        $pageValueProvider = $injector->get(PageValueProviderInterface::class);
        assert($pageValueProvider instanceof PageValueProviderInterface);
        $textValueProvider = $injector->get(TextValueProviderInterface::class);
        assert($textValueProvider instanceof TextValueProviderInterface);
        return new TextEmitter(
            $pageValueProvider,
            $textValueProvider,
        );
    }
}
