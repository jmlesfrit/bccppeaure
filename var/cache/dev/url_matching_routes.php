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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/acheteur' => [[['_route' => 'acheteur_index', '_controller' => 'App\\Controller\\AcheteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/acheteur/new' => [[['_route' => 'acheteur_new', '_controller' => 'App\\Controller\\AcheteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\BaseController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\BaseController::login'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lot' => [[['_route' => 'lot_index', '_controller' => 'App\\Controller\\LotController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lot/new' => [[['_route' => 'lot_new', '_controller' => 'App\\Controller\\LotController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\RouteController::connexion'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\RouteController::inscription'], null, null, null, false, false, null]],
        '/vente' => [[['_route' => 'vente_index', '_controller' => 'App\\Controller\\VenteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vente/new' => [[['_route' => 'vente_new', '_controller' => 'App\\Controller\\VenteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/acheteur/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                    .'|(*:263)'
                .')'
                .'|/lot/([^/]++)(?'
                    .'|(*:288)'
                    .'|/edit(*:301)'
                    .'|(*:309)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:338)'
                    .'|/edit(*:351)'
                    .'|(*:359)'
                .')'
                .'|/vente/([^/]++)(?'
                    .'|(*:386)'
                    .'|/edit(*:399)'
                    .'|(*:407)'
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
        190 => [[['_route' => 'acheteur_show', '_controller' => 'App\\Controller\\AcheteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'acheteur_edit', '_controller' => 'App\\Controller\\AcheteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'acheteur_delete', '_controller' => 'App\\Controller\\AcheteurController::delete'], ['idAcheteur'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        288 => [[['_route' => 'lot_show', '_controller' => 'App\\Controller\\LotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'lot_edit', '_controller' => 'App\\Controller\\LotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'lot_delete', '_controller' => 'App\\Controller\\LotController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        338 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        386 => [[['_route' => 'vente_show', '_controller' => 'App\\Controller\\VenteController::show'], ['idvente'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'vente_edit', '_controller' => 'App\\Controller\\VenteController::edit'], ['idvente'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        407 => [
            [['_route' => 'vente_delete', '_controller' => 'App\\Controller\\VenteController::delete'], ['idvente'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
