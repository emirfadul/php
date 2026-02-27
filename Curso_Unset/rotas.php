<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace(defaultNamespace: 'Sistema\Controlador');

SimpleRouter::get('Curso_unset/',  'SiteControlador@index');
SimpleRouter::get('Curso_unset/sobre',  'SiteControlador@sobre');

SimpleRouter::start();

