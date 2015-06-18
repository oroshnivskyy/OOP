<?php
include "vendor/autoload.php";
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$request = Request::createFromGlobals();

$routes = new RouteCollection();
$routes->add('hello', new Route('/hello', array('controller' => 'Hello', 'action'=>'index')));
$routes->add('index', new Route('/list', array('controller' => 'Index', 'action'=>'list')));
$routes->add('index', new Route('/', array('controller' => 'Index', 'action'=>'index')));

$context = new RequestContext();

// this is optional and can be done without a Request instance
$context->fromRequest(Request::createFromGlobals());

$matcher = new UrlMatcher($routes, $context);
file_put_contents('/tmp/log', json_encode($request->getPathInfo()). "\n", FILE_APPEND);
try{
    $parameters = $matcher->match($request->getPathInfo());
    $controller = new $parameters['controller']($request);
    $action = "{$parameters['action']}Action";
    $response = $controller->$action();
    $response->send();
}catch(Exception $e){
    $response = new Response('Not Found', 404, array('Content-Type' => 'text/plain'));
    $response->send();
}

