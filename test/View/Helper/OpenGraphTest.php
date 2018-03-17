<?php
namespace LeoGalleguillos\OpenGraphTest\View\Helper;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use LeoGalleguillos\OpenGraph\View\Helper as OpenGraphHelper;
use PHPUnit\Framework\TestCase;

class TotalTest extends TestCase
{
    protected function setUp()
    {
        $this->openGraphService = $this->createMock(
            OpenGraphService\OpenGraph::class
        );
        $this->openGraphHelper = new OpenGraphHelper\OpenGraph(
            $this->openGraphService
        );
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            OpenGraphHelper\OpenGraph::class,
            $this->openGraphHelper
        );
    }

    public function testInvoke()
    {
        $this->assertInstanceOf(
            OpenGraphService\OpenGraph::class,
            $this->openGraphHelper->__invoke()
        );
    }
}
