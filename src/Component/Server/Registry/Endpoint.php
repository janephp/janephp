<?php

namespace Jane\Component\Server\Registry;

class Endpoint
{
    public function __construct(
        public readonly string $className,
    ) {
    }
}
