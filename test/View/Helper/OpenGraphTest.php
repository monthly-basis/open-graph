<?php
namespace MonthlyBasis\OpenGraphTest\View\Helper;

use MonthlyBasis\OpenGraph\Model\Service as OpenGraphService;
use MonthlyBasis\OpenGraph\View\Helper as OpenGraphHelper;
use PHPUnit\Framework\TestCase;

class OpenGraphTest extends TestCase
{
    protected function setUp(): void
    {
        $this->openGraphService = $this->createMock(
            OpenGraphService\OpenGraph::class
        );
        $this->openGraphHelper = new OpenGraphHelper\OpenGraph(
            $this->openGraphService
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
