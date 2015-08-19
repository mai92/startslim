<?php

$app->get('/user', 'App\Controller\HomeController:userAction')
    ->setName('user');