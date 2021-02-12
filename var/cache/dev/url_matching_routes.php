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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', 'path' => '/en', 'controller' => 'App\\Controller\\DefaultController::index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(en|fr)(?'
                    .'|(*:180)'
                    .'|/(?'
                        .'|changeLocale(?:/([^/]++)(?:/([^/]++))?)?(*:232)'
                        .'|register(*:248)'
                        .'|log(?'
                            .'|in(*:264)'
                            .'|out(*:275)'
                        .')'
                        .'|profile(?'
                            .'|(*:294)'
                            .'|/([^/]++)(*:311)'
                        .')'
                        .'|avatar(*:326)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        180 => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], ['_locale'], null, null, true, true, null]],
        232 => [[['_route' => 'localeSwitcher', 'route' => null, 'locale' => null, '_controller' => 'App\\Controller\\LocaleSwitcher::index'], ['_locale', 'route', 'locale'], null, null, false, true, null]],
        248 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], ['_locale'], null, null, false, false, null]],
        264 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        275 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null]],
        294 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::edit'], ['_locale'], null, null, false, false, null]],
        311 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['_locale', 'id'], null, null, false, true, null]],
        326 => [
            [['_route' => 'app_profile_avatar', '_controller' => 'App\\Controller\\UserController::changeAvatar'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
