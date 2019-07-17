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
                    'getOgHtml'    => OpenGraphHelper\Html::class,
                    'getOgService' => OpenGraphHelper\OpenGraph::class,

                    // Deprecated
                    'ogHelper' => OpenGraphHelper\OpenGraph::class,
                ],
                'factories' => [
                    OpenGraphHelper\OpenGraph::class => function ($sm) {
                        return new OpenGraphHelper\OpenGraph(
                            $sm->get(OpenGraphService\OpenGraph::class)
                        );
                    },
                    OpenGraphHelper\Html::class => function ($sm) {
                        return new OpenGraphHelper\Html(
                            $sm->get(OpenGraphService\OpenGraph::class),
                            $sm->get(StringService\Escape::class)
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
                OpenGraphService\OpenGraph::class => function ($sm) {
                    return new OpenGraphService\OpenGraph();
                },
            ],
        ];
    }
}
