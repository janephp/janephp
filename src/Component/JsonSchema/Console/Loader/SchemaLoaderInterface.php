<?php

namespace Jane\Component\JsonSchema\Console\Loader;

use Jane\Component\JsonSchema\Registry\SchemaInterface;

interface SchemaLoaderInterface
{
    public function resolve(string $schema, array $options = []): SchemaInterface;
}
