<?php
namespace LeoGalleguillos\OpenGraph;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use LeoGalleguillos\OpenGraph\View\Helper as OpenGraphHelper;
use LeoGalleguillos\String\Model\Service as StringService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'ogHelper' => OpenGraphHelper\OpenGraph::class,
                    'render' => OpenGraphHelper\Render::class,
                ],
                'factories' => [
                    OpenGraphHelper\OpenGraph::class => function ($serviceManager) {
                        return new OpenGraphHelper\OpenGraph(
                            $serviceManager->get(OpenGraphService\OpenGraph::class)
                        );
                    },
                    OpenGraphHelper\Render::class => function ($serviceManager) {
                        return new OpenGraphHelper\Render(
                            $serviceManager->get(OpenGraphService\OpenGraph::class),
                            $serviceManager->get(StringService\Escape::class)
                        );
                    },
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                OpenGraphService\OpenGraph::class => function ($serviceManager) {
                    return new OpenGraphService\OpenGraph();
                },
            ],
        ];
    }
}
