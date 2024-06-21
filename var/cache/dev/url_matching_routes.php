<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HistoireController::home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/histoire/(?'
                    .'|([^/]++)(?'
                        .'|(*:66)'
                        .'|/page/([^/]++)(*:87)'
                    .')'
                    .'|fin/([^/]++)(*:107)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_histoire_p1', '_controller' => 'App\\Controller\\HistoireController::page1'], ['idHistoire'], null, null, false, true, null]],
        87 => [[['_route' => 'app_histoire_page', '_controller' => 'App\\Controller\\HistoireController::showPage'], ['idHistoire', 'numPage'], null, null, false, true, null]],
        107 => [
            [['_route' => 'app_histoire_fin', '_controller' => 'App\\Controller\\HistoireController::showEndingPage'], ['idHistoire'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
