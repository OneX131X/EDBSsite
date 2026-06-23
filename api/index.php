<?php

// 1. Create the necessary writable temporary directories inside Vercel's /tmp folder
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

// 2. Force Laravel to use the writable /tmp directory for its core operations
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';
$_ENV['CACHE_STORE'] = 'array';      // File cache will crash, use memory array
$_ENV['SESSION_DRIVER'] = 'cookie';  // File sessions will crash, use secure cookies
$_ENV['LOG_CHANNEL'] = 'stderr';     // Force logs into Vercel's console instead of files

// 3. Forward the Vercel serverless request to the Laravel application
require __DIR__ . '/../public/index.php';