<?php

$app->get('/', 'App\Controller\HomeController:homeAction')
    ->setName('home');