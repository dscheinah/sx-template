<?php

namespace Sx\Template\Template\Text;

use Sx\Container\FactoryInterface;
use Sx\Container\Injector;
use Sx\Template\Collector\Collector;
use Sx\Template\PageValueProviderInterface;

class TextCollectorFactory implements FactoryInterface
{
    /**
     * @param Injector $injector
     * @param array<mixed> $options
     * @param string $class
     *
     * @return TextCollector
     */
    public function create(Injector $injector, array $options, string $class): TextCollector
    {
        $collector = $injector->get(Collector::class);
        assert($collector instanceof Collector);
        $pageValueProvider = $injector->get(PageValueProviderInterface::class);
        assert($pageValueProvider instanceof PageValueProviderInterface);
        return new TextCollector(
            $collector,
            $pageValueProvider,
        );
    }
}
