<?php

namespace Jane\JsonSchema\Console\Loader;

interface ConfigLoaderInterface
{
    public function fileKey(): string;

    public function load(string $path): array;
}
