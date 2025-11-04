<?php

namespace Jane\Component\Server\Console\Loader;

use Jane\Component\Server\Registry\Server;

interface ServerLoaderInterface
{
    public function resolve(string $apiName, array $options = []): Server;
}
