<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Psr\Http\Message\RequestInterface;

interface AuthenticationPlugin
{
    public function authentication(RequestInterface $request): RequestInterface;

    public function getScope(): string;
}
