<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'Accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::accueil'], [], [['text', '/']], [], [], []],
    'About' => [[], ['_controller' => 'App\\Controller\\AccueilController::about'], [], [['text', '/About']], [], [], []],
    'Specialistes' => [[], ['_controller' => 'App\\Controller\\AccueilController::specialistes'], [], [['text', '/Specialistes']], [], [], []],
    'Service' => [[], ['_controller' => 'App\\Controller\\AccueilController::service'], [], [['text', '/Service']], [], [], []],
    'Consultation' => [[], ['_controller' => 'App\\Controller\\AccueilController::consultation'], [], [['text', '/Consultation']], [], [], []],
    'Contact' => [[], ['_controller' => 'App\\Controller\\AccueilController::contact'], [], [['text', '/Contact']], [], [], []],
    'SOINS' => [[], ['_controller' => 'App\\Controller\\AccueilController::soinsgeneraux'], [], [['text', '/Soins']], [], [], []],
    'PALLIATIFS' => [[], ['_controller' => 'App\\Controller\\AccueilController::palliatifs'], [], [['text', '/Palliatifs']], [], [], []],
    'PANSEMENTS' => [[], ['_controller' => 'App\\Controller\\AccueilController::pansements'], [], [['text', '/Pansements']], [], [], []],
    'DOMICILE' => [[], ['_controller' => 'App\\Controller\\AccueilController::domicile'], [], [['text', '/Domicile']], [], [], []],
    'AUTONOMIE' => [[], ['_controller' => 'App\\Controller\\AccueilController::autonomie'], [], [['text', '/Autonomie']], [], [], []],
    'PERFUSION' => [[], ['_controller' => 'App\\Controller\\AccueilController::perfusion'], [], [['text', '/Perfusion']], [], [], []],
    'App\Controller\AccueilController::accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::accueil'], [], [['text', '/']], [], [], []],
    'App\Controller\AccueilController::about' => [[], ['_controller' => 'App\\Controller\\AccueilController::about'], [], [['text', '/About']], [], [], []],
    'App\Controller\AccueilController::specialistes' => [[], ['_controller' => 'App\\Controller\\AccueilController::specialistes'], [], [['text', '/Specialistes']], [], [], []],
    'App\Controller\AccueilController::service' => [[], ['_controller' => 'App\\Controller\\AccueilController::service'], [], [['text', '/Service']], [], [], []],
    'App\Controller\AccueilController::consultation' => [[], ['_controller' => 'App\\Controller\\AccueilController::consultation'], [], [['text', '/Consultation']], [], [], []],
    'App\Controller\AccueilController::contact' => [[], ['_controller' => 'App\\Controller\\AccueilController::contact'], [], [['text', '/Contact']], [], [], []],
    'App\Controller\AccueilController::soinsgeneraux' => [[], ['_controller' => 'App\\Controller\\AccueilController::soinsgeneraux'], [], [['text', '/Soins']], [], [], []],
    'App\Controller\AccueilController::palliatifs' => [[], ['_controller' => 'App\\Controller\\AccueilController::palliatifs'], [], [['text', '/Palliatifs']], [], [], []],
    'App\Controller\AccueilController::pansements' => [[], ['_controller' => 'App\\Controller\\AccueilController::pansements'], [], [['text', '/Pansements']], [], [], []],
    'App\Controller\AccueilController::domicile' => [[], ['_controller' => 'App\\Controller\\AccueilController::domicile'], [], [['text', '/Domicile']], [], [], []],
    'App\Controller\AccueilController::autonomie' => [[], ['_controller' => 'App\\Controller\\AccueilController::autonomie'], [], [['text', '/Autonomie']], [], [], []],
    'App\Controller\AccueilController::perfusion' => [[], ['_controller' => 'App\\Controller\\AccueilController::perfusion'], [], [['text', '/Perfusion']], [], [], []],
];
