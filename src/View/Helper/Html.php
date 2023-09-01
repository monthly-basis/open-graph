<?php
namespace MonthlyBasis\OpenGraph\View\Helper;

use MonthlyBasis\OpenGraph\Model\Service as OpenGraphService;
use MonthlyBasis\String\Model\Service as StringService;
use Laminas\View\Helper\AbstractHelper;

class Html extends AbstractHelper
{
    public function __construct(
        OpenGraphService\OpenGraph $openGraphService,
        StringService\Escape $escapeService
    ) {
        $this->openGraphService = $openGraphService;
        $this->escapeService    = $escapeService;
    }

    public function __invoke(): string
    {
        $html = '';
        foreach ($this->openGraphService->getProperties() as $property => $content) {
            $propertyEscaped = $this->escapeService->escape($property);
            $contentEscaped  = $this->escapeService->escape($content);
            $html .= "<meta property=\"$propertyEscaped\" content=\"$contentEscaped\">\n";
        }
        return $html;
    }
}
