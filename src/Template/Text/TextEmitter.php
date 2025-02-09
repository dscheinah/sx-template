<?php

namespace Sx\Template\Template\Text;

use Sx\Template\PageValueProviderInterface;
use Sx\Template\TextValueProviderInterface;

class TextEmitter implements TextInterface
{
    public function __construct(
        private readonly PageValueProviderInterface $pageValueProvider,
        private readonly TextValueProviderInterface $textValueProvider,
    ) {
    }

    /**
     * Renders the currently selected text for the key using the registered providers.
     *
     * The label is only needed for the CMS and therefore unused.
     *
     * @param string $key
     * @param string|null $label
     *
     * @return string
     */
    public function text(string $key, ?string $label = null): string
    {
        $value = $this->pageValueProvider->get('text', $key);
        if (!$value) {
            return '';
        }
        return $this->textValueProvider->get($value);
    }
}
