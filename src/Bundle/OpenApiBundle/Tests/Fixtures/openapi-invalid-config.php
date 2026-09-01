<?php

declare(strict_types=1);

return [
    'openapi-file' => __DIR__ . '/not-openapi.json',
    'namespace' => 'Jane\Bundle\OpenApiBundle\Tests\Fixtures\Generated',
    'directory' => sys_get_temp_dir() . '/jane-openapi-bundle-test-' . getmypid(),
];
