<?php

use Pecee\SimpleRouter\SimpleRouter;

try {
    SimpleRouter::setDefaultNamespace(defaultNamespace: 'Sistema\Controlador');

    SimpleRouter::get(SITE_NOVO,  'SiteControlador@index');
    SimpleRouter::get(SITE_NOVO . 'sobre', 'SiteControlador@sobre');

    SimpleRouter::start();

}catch (\Exception $ex){
    echo $ex->getMessage();
}
