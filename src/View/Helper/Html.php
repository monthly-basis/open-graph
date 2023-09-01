<?php
namespace MonthlyBasis\OpenGraph\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MonthlyBasis\OpenGraph\Model\Service as OpenGraphService;
use MonthlyBasis\String\Model\Service as StringService;

class Html extends AbstractHelper
{
    public function __construct(
        protected OpenGraphService\OpenGraph $openGraphService,
        protected StringService\Escape $escapeService,
    ) {
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
