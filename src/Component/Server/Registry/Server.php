<?php

namespace Jane\Component\Server\Registry;

class Server
{
    /**
     * @var Endpoint[]
     */
    public array $endpoints = [];

    public function __construct(
        public readonly string $apiName,
        public readonly string $namespace,
        public readonly string $directory,
    ) {
    }
}
