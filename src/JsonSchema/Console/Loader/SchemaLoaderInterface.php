<?php

namespace Jane\JsonSchema\Console\Loader;

use Jane\JsonSchema\Registry\SchemaInterface;

interface SchemaLoaderInterface
{
    public function resolve(string $schema, array $options = []): SchemaInterface;
}
