<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/histoire' => [[['_route' => 'app_histoire_p1', '_controller' => 'App\\Controller\\HistoireController::page1'], null, null, null, false, false, null]],
        '/histoire/fin' => [[['_route' => 'app_histoire_fin', '_controller' => 'App\\Controller\\HistoireController::showEndingPage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/histoire/page/([^/]++)(*:30)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [
            [['_route' => 'app_histoire_page', '_controller' => 'App\\Controller\\HistoireController::showPage'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
