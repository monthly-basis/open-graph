<?php
namespace LeoGalleguillos\OpenGraph\View\Helper;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use LeoGalleguillos\String\Model\Service as StringService;
use Zend\View\Helper\AbstractHelper;

class Render extends AbstractHelper
{
    public function __construct(
        OpenGraphService\OpenGraph $openGraphService,
        StringService\Escape $escapeService
    ) {
        $this->openGraphService = $openGraphService;
        $this->escapeService    = $escapeService;
    }

    public function __invoke()
    {
        foreach ($this->openGraphService->getProperties() as $property => $content) {
            $propertyEscaped = $this->escapeService->escape($property);
            $contentEscaped  = $this->escapeService->escape($content);
            echo "<meta property=\"$propertyEscaped\" content=\"$contentEscaped\">";
        }
    }
}
