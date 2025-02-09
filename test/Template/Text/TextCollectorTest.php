<?php

namespace Sx\TemplateTest\Template\Text;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sx\Template\Collector\Collector;
use Sx\Template\Collector\DTO\CollectorContentDTO;
use Sx\Template\PageValueProviderInterface;
use Sx\Template\Template\Text\TextCollector;

class TextCollectorTest extends TestCase
{
    private TextCollector $textCollector;

    private MockObject $collectorMock;

    private MockObject $pageValueProviderMock;

    protected function setUp(): void
    {
        $this->collectorMock = $this->createMock(Collector::class);
        $this->pageValueProviderMock = $this->createMock(PageValueProviderInterface::class);
        $this->textCollector = new TextCollector(
            $this->collectorMock,
            $this->pageValueProviderMock,
        );
    }

    public function testText(): void
    {
        $collectorContentDTO = new CollectorContentDTO();
        $collectorContentDTO->type = 'text';
        $collectorContentDTO->key = 'test key';
        $collectorContentDTO->value = 'test value';
        $collectorContentDTO->label = 'test label';

        $this->pageValueProviderMock->expects($this->once())->method('get')
            ->with($collectorContentDTO->type, $collectorContentDTO->key)
            ->willReturn($collectorContentDTO->value);

        $this->collectorMock->expects($this->once())->method('addContent')
            ->with($collectorContentDTO);

        self::assertEmpty($this->textCollector->text($collectorContentDTO->key, $collectorContentDTO->label));
    }
}
