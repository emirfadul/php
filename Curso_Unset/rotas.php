<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace(defaultNamespace: 'Sistema\Controlador');

SimpleRouter::get('/',  'SiteControlador@index');
SimpleRouter::get('/sobre',  'SiteControlador@sobre');

SimpleRouter::start();

