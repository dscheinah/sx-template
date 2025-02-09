<?php

namespace Sx\TemplateTest\Collector;

use PHPUnit\Framework\TestCase;
use Sx\Template\Collector\Collector;
use Sx\Template\Collector\DTO\CollectorContentDTO;

class CollectorTest extends TestCase
{
    private Collector $collector;

    protected function setUp(): void
    {
        $this->collector = new Collector();
    }

    public function testSetTitle(): void
    {
        $title = 'test title';
        $this->collector->setTitle($title);
        self::assertEquals($title, $this->collector->data->title);
    }

    public function testBeginSection(): void
    {
        $heading = 'test heading';
        $this->collector->beginSection($heading);
        self::assertCount(1, $this->collector->data->sections);
        self::assertEquals($heading, $this->collector->data->sections[0]->heading);
    }

    public function testBeginSectionMultiple(): void
    {
        $this->collector->beginSection('');
        $this->collector->beginSection('');
        self::assertCount(2, $this->collector->data->sections);
    }

    public function testAddContent(): void
    {
        $collectorContentDTO = new CollectorContentDTO();
        $this->collector->addContent($collectorContentDTO);
        self::assertCount(1, $this->collector->data->sections);
        self::assertCount(1, $this->collector->data->sections[0]->contents);
        self::assertSame($collectorContentDTO, $this->collector->data->sections[0]->contents[0]);
    }

    public function testAddContentMultiple(): void
    {
        $collectorContentDTO = new CollectorContentDTO();
        $this->collector->addContent($collectorContentDTO);
        $this->collector->addContent($collectorContentDTO);
        self::assertCount(1, $this->collector->data->sections);
        self::assertCount(2, $this->collector->data->sections[0]->contents);
    }

    public function testAddContentToSection(): void
    {
        $collectorContentDTO = new CollectorContentDTO();
        $this->collector->beginSection('');
        $this->collector->addContent($collectorContentDTO);
        self::assertCount(1, $this->collector->data->sections);
        self::assertCount(1, $this->collector->data->sections[0]->contents);
        self::assertSame($collectorContentDTO, $this->collector->data->sections[0]->contents[0]);
    }
}
