<?php
namespace LeoGalleguillos\OpenGraphTest\Model\Service\OpenGraphs;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use PHPUnit\Framework\TestCase;

class OpenGraphTest extends TestCase
{
    protected function setUp(): void
    {
        $this->openGraphService = new OpenGraphService\OpenGraph();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            OpenGraphService\OpenGraph::class,
            $this->openGraphService
        );
    }

    public function testGetProperties()
    {
        $this->assertSame(
            [],
            $this->openGraphService->getProperties()
        );
    }

    public function testSetProperty()
    {
        $this->openGraphService->setProperty('property', 'content');
        $this->openGraphService->setProperty('property2', 'content');
        $this->openGraphService->setProperty('property', 'content replacement');
        $this->assertSame(
            2,
            count($this->openGraphService->getProperties())
        );
    }

    public function testSetProperties()
    {
        $this->openGraphService->setProperties([
            'property1' => 'content1',
            'property2' => 'content2',
            'property3' => 'content3',
        ]);
        $this->assertSame(
            3,
            count($this->openGraphService->getProperties())
        );
    }
}
