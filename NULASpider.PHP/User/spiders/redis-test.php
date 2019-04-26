<?php

use nulastudio\Collections\RedisQueue;
use nulastudio\Log\FileLogger;
use nulastudio\Spider\Spider;

$config = [
    'thread'              => 5,
    'UI'                  => false,
    'urlQueue'            => new RedisQueue('', [
        'host' => '127.0.0.1:6379',
        'key'  => 'urlQueue',
    ]),
    'logger'              => new FileLogger(DIR_LOG . '/' . date('Y-m-d') . '.log'),
    'scan_urls'           => [],
    'list_url_pattern'    => [],
    'content_url_pattern' => [],
    'fields'              => [],
    'export'              => [
        'type' => 'print',
    ],
];

$spider = new Spider($config);

$spider->use(User\Plugins\Buff::class);
$spider->use(User\Plugins\PrintOutExporter::class);

$spider->start();
