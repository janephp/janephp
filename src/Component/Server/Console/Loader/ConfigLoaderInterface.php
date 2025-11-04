<?php

namespace Jane\Component\Server\Console\Loader;

interface ConfigLoaderInterface
{
    public function fileKey(): string;

    public function load(string $path): array;
}
