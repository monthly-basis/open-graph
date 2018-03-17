<?php
namespace LeoGalleguillos\OpenGraph\View\Helper;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use Zend\View\Helper\AbstractHelper;

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
