<?php
use Illuminate\Http\Request;
define('LARAVEL_START', microtime(true));
$app = require __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');
require __DIR__ . '/../vendor/autoload.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle($request = Request::capture());
$response->send();
$kernel->terminate($request, $response);