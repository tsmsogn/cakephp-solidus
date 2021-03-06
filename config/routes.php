<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Solidus',
    ['path' => '/'],
    function (RouteBuilder $route) {
    $route->prefix('admin', function (RouteBuilder $route) {
        $route->scope('/solidus', [], function (RouteBuilder $route) {
            $route->fallbacks();
        });
    });
});
