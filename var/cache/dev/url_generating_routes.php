<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_genre' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/genre']], [], [], []],
    'addgenre' => [[], ['_controller' => 'App\\Controller\\GenreController::addgenre'], [], [['text', '/addgenre']], [], [], []],
    'affgenre' => [[], ['_controller' => 'App\\Controller\\GenreController::liste'], [], [['text', '/affichergenre']], [], [], []],
    'app_updateg' => [['id'], ['_controller' => 'App\\Controller\\GenreController::updateGenre'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updategenre']], [], [], []],
    'removegenre' => [['id'], ['_controller' => 'App\\Controller\\GenreController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/removegenre']], [], [], []],
    'app_genre_json' => [[], ['_controller' => 'App\\Controller\\GenreJsonController::index'], [], [['text', '/genre/json']], [], [], []],
    'app_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation1']], [], [], []],
    'addrecl' => [[], ['_controller' => 'App\\Controller\\ReclamationController::addrec'], [], [['text', '/addreclamation']], [], [], []],
    'app_affrec' => [[], ['_controller' => 'App\\Controller\\ReclamationController::liste1'], [], [['text', '/affichreclamation1']], [], [], []],
    'app_affrecfront' => [[], ['_controller' => 'App\\Controller\\ReclamationController::liste2'], [], [['text', '/affichreclamation2']], [], [], []],
    'app_updater' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::updateType'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updater']], [], [], []],
    'app_updaterb' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::updateTypeback'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updaterb']], [], [], []],
    'app_removerecback' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/removerec']], [], [], []],
    'app_removerec' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::removefront'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/removerecfront']], [], [], []],
    'PDF_Reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::pdf'], [], [['text', '/pdf']], [], [], []],
    'app_reclamation_json' => [[], ['_controller' => 'App\\Controller\\ReclamationJsonController::index'], [], [['text', '/reclamation/json']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
