<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/genre' => [[['_route' => 'app_genre', '_controller' => 'App\\Controller\\GenreController::index'], null, null, null, false, false, null]],
        '/addgenre' => [[['_route' => 'addgenre', '_controller' => 'App\\Controller\\GenreController::addgenre'], null, null, null, false, false, null]],
        '/affichergenre' => [[['_route' => 'affgenre', '_controller' => 'App\\Controller\\GenreController::liste'], null, null, null, false, false, null]],
        '/genre/json' => [[['_route' => 'app_genre_json', '_controller' => 'App\\Controller\\GenreJsonController::index'], null, null, null, false, false, null]],
        '/reclamation1' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/addreclamation' => [[['_route' => 'addrecl', '_controller' => 'App\\Controller\\ReclamationController::addrec'], null, null, null, false, false, null]],
        '/affichreclamation1' => [[['_route' => 'app_affrec', '_controller' => 'App\\Controller\\ReclamationController::liste1'], null, null, null, false, false, null]],
        '/affichreclamation2' => [[['_route' => 'app_affrecfront', '_controller' => 'App\\Controller\\ReclamationController::liste2'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'PDF_Reclamation', '_controller' => 'App\\Controller\\ReclamationController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/json' => [[['_route' => 'app_reclamation_json', '_controller' => 'App\\Controller\\ReclamationJsonController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/update(?'
                    .'|genre/([^/]++)(*:31)'
                    .'|r(?'
                        .'|/([^/]++)(*:51)'
                        .'|b/([^/]++)(*:68)'
                    .')'
                .')'
                .'|/remove(?'
                    .'|genre/([^/]++)(*:101)'
                    .'|rec(?'
                        .'|/([^/]++)(*:124)'
                        .'|front/([^/]++)(*:146)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:187)'
                    .'|wdt/([^/]++)(*:207)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:253)'
                            .'|router(*:267)'
                            .'|exception(?'
                                .'|(*:287)'
                                .'|\\.css(*:300)'
                            .')'
                        .')'
                        .'|(*:310)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_updateg', '_controller' => 'App\\Controller\\GenreController::updateGenre'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'app_updater', '_controller' => 'App\\Controller\\ReclamationController::updateType'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'app_updaterb', '_controller' => 'App\\Controller\\ReclamationController::updateTypeback'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'removegenre', '_controller' => 'App\\Controller\\GenreController::remove'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'app_removerecback', '_controller' => 'App\\Controller\\ReclamationController::remove'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'app_removerec', '_controller' => 'App\\Controller\\ReclamationController::removefront'], ['id'], null, null, false, true, null]],
        187 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        207 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        253 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        267 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        287 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        300 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        310 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
