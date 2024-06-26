<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'Accueil', '_controller' => 'App\\Controller\\AccueilController::accueil'], null, null, null, false, false, null]],
        '/About' => [[['_route' => 'About', '_controller' => 'App\\Controller\\AccueilController::about'], null, null, null, false, false, null]],
        '/Specialistes' => [[['_route' => 'Specialistes', '_controller' => 'App\\Controller\\AccueilController::specialistes'], null, null, null, false, false, null]],
        '/Service' => [[['_route' => 'Service', '_controller' => 'App\\Controller\\AccueilController::service'], null, null, null, false, false, null]],
        '/Consultation' => [[['_route' => 'Consultation', '_controller' => 'App\\Controller\\AccueilController::consultation'], null, null, null, false, false, null]],
        '/Contact' => [[['_route' => 'Contact', '_controller' => 'App\\Controller\\AccueilController::contact'], null, null, null, false, false, null]],
        '/Soins' => [[['_route' => 'SOINS', '_controller' => 'App\\Controller\\AccueilController::soinsgeneraux'], null, null, null, false, false, null]],
        '/Palliatifs' => [[['_route' => 'PALLIATIFS', '_controller' => 'App\\Controller\\AccueilController::palliatifs'], null, null, null, false, false, null]],
        '/Pansements' => [[['_route' => 'PANSEMENTS', '_controller' => 'App\\Controller\\AccueilController::pansements'], null, null, null, false, false, null]],
        '/Domicile' => [[['_route' => 'DOMICILE', '_controller' => 'App\\Controller\\AccueilController::domicile'], null, null, null, false, false, null]],
        '/Autonomie' => [[['_route' => 'AUTONOMIE', '_controller' => 'App\\Controller\\AccueilController::autonomie'], null, null, null, false, false, null]],
        '/Perfusion' => [[['_route' => 'PERFUSION', '_controller' => 'App\\Controller\\AccueilController::perfusion'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
