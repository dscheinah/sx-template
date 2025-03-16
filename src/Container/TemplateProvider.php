<?php

namespace Sx\Template\Container;

use Sx\Container\Injector;
use Sx\Container\ProviderInterface;
use Sx\Template\Collector\Collector;
use Sx\Template\Collector\CollectorFactory;
use Sx\Template\Template\Calendar\CalendarCollector;
use Sx\Template\Template\Calendar\CalendarCollectorFactory;
use Sx\Template\Template\Calendar\CalendarEmitter;
use Sx\Template\Template\Calendar\CalendarEmitterFactory;
use Sx\Template\Template\Section\SectionCollector;
use Sx\Template\Template\Section\SectionCollectorFactory;
use Sx\Template\Template\Section\SectionEmitter;
use Sx\Template\Template\Section\SectionEmitterFactory;
use Sx\Template\Template\Text\TextCollector;
use Sx\Template\Template\Text\TextCollectorFactory;
use Sx\Template\Template\Text\TextEmitter;
use Sx\Template\Template\Text\TextEmitterFactory;
use Sx\Template\Template\Title\TitleCollector;
use Sx\Template\Template\Title\TitleCollectorFactory;
use Sx\Template\Template\Title\TitleEmitter;
use Sx\Template\Template\Title\TitleEmitterFactory;

class TemplateProvider implements ProviderInterface
{
    /**
     * Registers the default factories for all classes used in this module.
     *
     * @param Injector $injector
     */
    public function provide(Injector $injector): void
    {
        $injector->set(Collector::class, CollectorFactory::class);

        $injector->set(CalendarCollector::class, CalendarCollectorFactory::class);
        $injector->set(CalendarEmitter::class, CalendarEmitterFactory::class);

        $injector->set(SectionCollector::class, SectionCollectorFactory::class);
        $injector->set(SectionEmitter::class, SectionEmitterFactory::class);

        $injector->set(TextCollector::class, TextCollectorFactory::class);
        $injector->set(TextEmitter::class, TextEmitterFactory::class);

        $injector->set(TitleCollector::class, TitleCollectorFactory::class);
        $injector->set(TitleEmitter::class, TitleEmitterFactory::class);
    }
}
