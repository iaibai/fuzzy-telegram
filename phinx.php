<?php
require_once 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

return [
    "paths" => [
        "migrations" => __DIR__ . '/migrations',
    ],
    "environments" => [
        "default_migration_table" => "phinxlog",
        "default" => [
            "adapter" => "mysql",
            "host" => getenv('DB_HOST'),
            "name" => getenv('DB_DATABASE'),
            "user" => getenv('DB_USERNAME'),
            "pass" => getenv('DB_PASSWORD')
        ]
    ]
];
