<?php

// 1. Register the Composer autoloader (This is what was missing!)
require __DIR__ . '/../vendor/autoload.php';

// 2. Create the necessary writable temporary directories inside Vercel's /tmp folder
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/bootstrap/cache'
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 3. Force Laravel's env() helper to override core cache pathways
$overrides = [
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'cookie',
    'LOG_CHANNEL' => 'stderr',
    'APP_SERVICES_CACHE' => '/tmp/storage/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE' => '/tmp/storage/bootstrap/cache/packages.php',
    'APP_CONFIG_CACHE' => '/tmp/storage/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE' => '/tmp/storage/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE' => '/tmp/storage/bootstrap/cache/events.php',
];

foreach ($overrides as $key => $value) {
    putenv("{$key}={$value}");
    $_SERVER[$key] = $value;
    $_ENV[$key] = $value;
}

// 4. Load Laravel's core application directly
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Force Laravel to physically use the writable /tmp directory for storage requests
$app->useStoragePath('/tmp/storage');

// 6. Handle the serverless request natively
$response = $app->handleRequest(Illuminate\Http\Request::capture());
$response->send();