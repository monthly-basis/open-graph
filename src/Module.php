<?php
namespace LeoGalleguillos\OpenGraph;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;
use LeoGalleguillos\OpenGraph\View\Helper as OpenGraphHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'ogHelper' => OpenGraphHelper\OpenGraph::class,
                ],
                'factories' => [
                    OpenGraphHelper\OpenGraph::class => function ($serviceManager) {
                        return new OpenGraphHelper\OpenGraph(
                            $serviceManager->get(OpenGraphService\OpenGraph::class)
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
