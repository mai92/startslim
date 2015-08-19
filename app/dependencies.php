<?php

$container = $app->getContainer();

$container['view'] = function($c) {
	$view = new \Slim\Views\Twig($c['settings']['view']['template_path'], $c['settings']['view']['twig']);

	$view->addExtension(new \Slim\Views\TwigExtension(
			$c['router'],
			$c['request']->getUri()
		));

	$view->addExtension(new Twig_Extension_Debug());

	return $view;
};

$container['logger'] = function ($c) {
    $settings = $c['settings']['logger'];
    $logger = new \Monolog\Logger($settings['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

$container['App\Controller\HomeController'] = function ($c) {
    return new App\Controller\HomeController($c['view'], $c['logger']);
};