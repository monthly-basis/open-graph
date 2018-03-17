<?php
namespace LeoGalleguillos\OpenGraphTest\Model\Service\OpenGraphs;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use PHPUnit\Framework\TestCase;

class OpenGraphTest extends TestCase
{
    protected function setUp()
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
}
