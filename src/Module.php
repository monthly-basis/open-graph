<?php
namespace LeoGalleguillos\OpenGraph;

use LeoGalleguillos\OpenGraph\Model\Service as OpenGraphService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
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
