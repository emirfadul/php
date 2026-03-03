<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace(defaultNamespace: 'Sistema\Controlador');

SimpleRouter::get(URL_SITE,  'SiteControlador@index');
SimpleRouter::get(URL_SITE . 'sobre', 'SiteControlador@sobre');

SimpleRouter::start();

