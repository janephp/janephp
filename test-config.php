<?php

return [
    'openapi-file' => 'something.yml',
    'namespace' => 'Tests\Something',
    'directory' => __DIR__ . '/generated/Something/',
    'custom-string-format-mapping' => [
        'uuid' => \Symfony\Component\Uid\UuidV4::class
    ]
];
