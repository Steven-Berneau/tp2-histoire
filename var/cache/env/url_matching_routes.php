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
                .'|/histoire/(?'
                    .'|([^/]++)(?'
                        .'|(*:31)'
                        .'|/page/([^/]++)(*:52)'
                    .')'
                    .'|fin/([^/]++)(*:72)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_histoire_p1', '_controller' => 'App\\Controller\\HistoireController::page1'], ['idHistoire'], null, null, false, true, null]],
        52 => [[['_route' => 'app_histoire_page', '_controller' => 'App\\Controller\\HistoireController::showPage'], ['idHistoire', 'numPage'], null, null, false, true, null]],
        72 => [
            [['_route' => 'app_histoire_fin', '_controller' => 'App\\Controller\\HistoireController::showEndingPage'], ['idHistoire'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
