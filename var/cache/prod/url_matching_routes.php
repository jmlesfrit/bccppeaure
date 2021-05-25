<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/acheteur/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:77)'
                    .'|/edit(*:89)'
                    .'|(*:96)'
                .')'
                .'|/lot/([^/]++)(?'
                    .'|(*:120)'
                    .'|/edit(*:133)'
                    .'|(*:141)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:170)'
                    .'|/edit(*:183)'
                    .'|(*:191)'
                .')'
                .'|/vente/([^/]++)(?'
                    .'|(*:218)'
                    .'|/edit(*:231)'
                    .'|(*:239)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'acheteur_show', '_controller' => 'App\\Controller\\AcheteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'acheteur_edit', '_controller' => 'App\\Controller\\AcheteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'acheteur_delete', '_controller' => 'App\\Controller\\AcheteurController::delete'], ['idAcheteur'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        120 => [[['_route' => 'lot_show', '_controller' => 'App\\Controller\\LotController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'lot_edit', '_controller' => 'App\\Controller\\LotController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        141 => [[['_route' => 'lot_delete', '_controller' => 'App\\Controller\\LotController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => 'vente_show', '_controller' => 'App\\Controller\\VenteController::show'], ['idvente'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'vente_edit', '_controller' => 'App\\Controller\\VenteController::edit'], ['idvente'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        239 => [
            [['_route' => 'vente_delete', '_controller' => 'App\\Controller\\VenteController::delete'], ['idvente'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
