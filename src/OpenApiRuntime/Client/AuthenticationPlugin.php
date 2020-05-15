<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

interface AuthenticationPlugin
{
    public function getScope(): string;
}
