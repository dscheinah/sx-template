<?php

namespace Sx\TemplateTest\Template\Text;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sx\Template\PageValueProviderInterface;
use Sx\Template\Template\Text\TextEmitter;
use Sx\Template\TextValueProviderInterface;

class TextEmitterTest extends TestCase
{
    private TextEmitter $textEmitter;

    private MockObject $pageValueProviderMock;

    private MockObject $textValueProviderMock;

    protected function setUp(): void
    {
        $this->pageValueProviderMock = $this->createMock(PageValueProviderInterface::class);
        $this->textValueProviderMock = $this->createMock(TextValueProviderInterface::class);
        $this->textEmitter = new TextEmitter(
            $this->pageValueProviderMock,
            $this->textValueProviderMock,
        );
    }

    public function testText(): void
    {
        $key = 'test key';
        $value = 'test value';
        $text = 'test text';

        $this->pageValueProviderMock->expects($this->once())->method('get')
            ->with('text', $key)
            ->willReturn($value);
        $this->textValueProviderMock->expects($this->once())->method('get')
            ->with($value)
            ->willReturn($text);

        self::assertEquals($text, $this->textEmitter->text($key));
    }

    public function testTextNotFound(): void
    {
        $key = 'test key';

        $this->pageValueProviderMock->expects($this->once())->method('get')
            ->with('text', $key)
            ->willReturn(null);

        self::assertEmpty($this->textEmitter->text($key));
    }
}
