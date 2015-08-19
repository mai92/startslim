<?php

namespace App\Controller;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use App\Models\User;

class HomeController
{
	private $view;
	private $logger;

	public function __construct(Twig $view, LoggerInterface $logger)
	{
		$this->view 	= $view;
		$this->logger 	= $logger;
	}

	public function homeAction($request, $response, $args)
	{
		return $this->view->render($response, 'home.twig');
	}

	public function userAction($request, $response, $args)
	{
		$users = User::all();

		return $this->view->render($response, 'user.twig',[
				'users' => $users,
			]);
	}
}