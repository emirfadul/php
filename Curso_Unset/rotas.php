<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace(defaultNamespace: 'Sistema\Controlador');

SimpleRouter::get('/Curso_Unset/',  'SiteControlador@index');

SimpleRouter::start();

