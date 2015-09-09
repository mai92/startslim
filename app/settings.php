<?php
return [

    'settings' =>[
    // View settings
        'view' => [
            'template_path' => __DIR__ . '/views',
            'twig' => [
                'cache' => __DIR__ . '/../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],
    // Monolog Setings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../log/app.log',
            ],
        ],

];