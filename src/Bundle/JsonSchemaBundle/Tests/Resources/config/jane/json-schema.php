<?php

declare(strict_types=1);

return [
    'json-schema-file' => __DIR__ . '/../../../Fixtures/schema.json',
    'root-class' => 'RootObject',
    'namespace' => 'Jane\Bundle\JsonSchemaBundle\Tests\Fixtures\Generated',
    'directory' => sys_get_temp_dir() . '/jane-jsonschema-bundle-test-' . getmypid(),
];
