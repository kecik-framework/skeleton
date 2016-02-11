<?php
$RoutesDir = __DIR__ . '..';
$RouteFiles = scandir($RoutesDir);

if (count($RouteFiles) > 2) {

    foreach ($RouteFiles as $RouteFile) {

        if ($RouteFile == '.' || $RouteFile == '..') {
            continue;
        }

        include_once $RoutesDir . $RouteFile;
    }

} else {
    $app->assets->css->add('bootstrap.min');
    $app->assets->css->add('bootstrap-theme.min');
    $app->assets->css->add('starter-template');

    $app->assets->js->add('jquery.min');
    $app->assets->js->add('bootstrap.min');

    $app->get(
        '/',
        function () {
            return $this->container['welcomeController']->index();
            //** Direct without Container
            //$c = new Controller\Welcome($this);
            //return $c->index();
            //-- End
        }
    )->template('basic/basic');

    //** Route Like Codeigniter index.php/Controller/Method/Param1/Params2/Param3.../ParamsN
    /*$app->get(
        ':controller',
        function ($controller) {
            $controller = 'Controller\\' . ucfirst($controller);
            $c = new $controller($this);
            return $c->index();
        }
    )->template('basic/basic');

    $app->get(
        ':controller/:method',
        function ($controller, $method) {
            $controller = 'Controller\\' . ucfirst($controller);
            $c = new $controller($this);
            return call_user_func_array(array($c, $method), array());
        }
    )->template('basic/basic');

    $app->get(
        ':controller/:method/:params+',
        function ($controller, $method, $params = array()) {
            $controller = 'Controller\\' . ucfirst($controller);
            $c = new $controller($this);
            return call_user_func_array(array($c, $method), $params);
        }
    )->template('basic/basic');

    $app->post(
        ':controller/:method/:params+',
        function ($controller, $method, $params = array()) {
            $controller = 'Controller\\' . ucfirst($controller);
            $c = new $controller($this);
            return call_user_func_array(array($c, $method), $params);
        }
    );*/
    //-- END Route Like CodeIgniter
}