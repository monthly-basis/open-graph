<?php
namespace MonthlyBasis\OpenGraphTest\Model\Service\OpenGraphs;

use MonthlyBasis\OpenGraph\Model\Service as OpenGraphService;
use PHPUnit\Framework\TestCase;

class OpenGraphTest extends TestCase
{
    protected function setUp(): void
    {
        $this->openGraphService = new OpenGraphService\OpenGraph();
    }

    public function test_getProperty()
    {
        $this->assertNull(
            $this->openGraphService->getProperty('foo')
        );

        $this->openGraphService->setProperty('foo', 'bar');
        $this->assertSame(
            'bar',
            $this->openGraphService->getProperty('foo')
        );
    }

    public function test_getProperties()
    {
        $this->assertSame(
            [],
            $this->openGraphService->getProperties()
        );
    }

    public function test_setProperty()
    {
        $this->openGraphService->setProperty('property', 'content');
        $this->openGraphService->setProperty('property2', 'content');
        $this->openGraphService->setProperty('property', 'content replacement');
        $this->assertSame(
            2,
            count($this->openGraphService->getProperties())
        );
    }

    public function test_setProperties()
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
