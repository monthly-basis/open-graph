<?php
namespace MonthlyBasis\OpenGraph\View\Helper;

use MonthlyBasis\OpenGraph\Model\Service as OpenGraphService;
use Laminas\View\Helper\AbstractHelper;

class OpenGraph extends AbstractHelper
{
    public function __construct(
        OpenGraphService\OpenGraph $openGraphService
    ) {
        $this->openGraphService = $openGraphService;
    }

    public function __invoke()
    {
        return $this->openGraphService;
    }
}
