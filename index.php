<?php

require 'vendor/autoload.php';
require 'vendor/illuminate/support/Illuminate/Support/helpers.php';

$basePath = str_finish(dirname(__FILE__), '/');
$controllersDirectory = $basePath . 'Controladores';
$modelsDirectory = $basePath . 'Modelos';

// register the autoloader and add directories
Illuminate\Support\ClassLoader::register();
Illuminate\Support\ClassLoader::addDirectories(array($controllersDirectory, $modelsDirectory));


// Instantiate the container
$app = new Illuminate\Container\Container();

// Tell facade about the application instance
Illuminate\Support\Facades\Facade::setFacadeApplication($app);

// register application instance with container
$app['app'] = $app;
$app['env'] = 'production';

with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

require $basePath . 'routes.php';

// Instantiate the request
$request = Illuminate\Http\Request::createFromGlobals();

// Dispatch the router
try
{
    $response = $app['router']->dispatch($request);
    $response->send();
}
catch(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $notFound)
{
    with(new \Illuminate\Http\Response('Oops! this page does not exists', 400))->send();
}

// Send the response
// $response->send();
