<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../templates/',
            'cache_path' => false,
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // MySQL Database
        "db" => [
            "host" => getenv('DB_HOST'),
            "database" => getenv('DB_DATABASE'),
            "username" => getenv('DB_USERNAME'),
            "password" => getenv('DB_PASSWORD')
        ],
    ],
];
