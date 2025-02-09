<?php

namespace Sx\Template\Template\Text;

use Sx\Template\Collector\Collector;
use Sx\Template\Collector\DTO\CollectorContentDTO;
use Sx\Template\PageValueProviderInterface;

class TextCollector implements TextInterface
{
    public function __construct(
        private readonly Collector $collector,
        private readonly PageValueProviderInterface $pageValueProvider,
    ) {
    }

    /**
     * Registers the given text for selection in the CMS.
     *
     * The current selected value is retrieved form the page provider.
     *
     * @param string $key
     * @param string|null $label
     *
     * @return string
     */
    public function text(string $key, ?string $label = null): string
    {
        $collectorContentDTO = new CollectorContentDTO();
        $collectorContentDTO->type = 'text';
        $collectorContentDTO->key = $key;
        $collectorContentDTO->value = $this->pageValueProvider->get('text', $key);
        $collectorContentDTO->label = $label;
        $this->collector->addContent($collectorContentDTO);
        return '';
    }
}
