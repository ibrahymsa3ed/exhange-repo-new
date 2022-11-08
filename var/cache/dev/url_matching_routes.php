<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/xe/exchange/today' => [[['_route' => 'today', '_controller' => 'App\\Controller\\XeController::index'], null, null, null, false, false, null]],
        '/xe/exchange/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\XeController::second'], null, null, null, false, false, null]],
        '/xe/exchange/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\XeController::add'], null, null, null, false, false, null]],
        '/xe/exchange/view' => [[['_route' => 'view', '_controller' => 'App\\Controller\\XeController::view'], null, null, null, false, false, null]],
        '/xe/exchange/alert' => [[['_route' => 'alert', '_controller' => 'App\\Controller\\XeController::alert'], null, null, null, false, false, null]],
        '/xe/exchange/addalert' => [[['_route' => 'addalert', '_controller' => 'App\\Controller\\XeController::create'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/xe/exchange/delete(?'
                    .'|/([^/]++)(*:73)'
                    .'|alert/([^/]++)(*:94)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\XeController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        94 => [
            [['_route' => 'deletealert', '_controller' => 'App\\Controller\\XeController::deletealert'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
