<?php
 
namespace Ngdropdown\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class NgdropdownRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','Ngdropdown\Controllers\ContentController@sayHello');
    }
}