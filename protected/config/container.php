<?php
$app->container['welcomeController'] = function ($container) use ($app) {
    return new Controllers\Welcome($app);
};

$app->container['corlateController'] = function ($container) use ($app) {
    return new Controllers\Corlate($app);
};

$app->container['margoController'] = function ($container) use ($app) {
    return new Controllers\Margo($app);
};

$app->container['sbadminController'] = function ($container) use ($app) {
    return new Controllers\SBAdmin($app);
};

$app->container['adminlteController'] = function ($container) use ($app) {
    return new Controllers\AdminLTE($app);
};