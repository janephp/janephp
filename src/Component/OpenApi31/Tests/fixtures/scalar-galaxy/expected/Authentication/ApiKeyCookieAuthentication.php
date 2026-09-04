<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Authentication;

class ApiKeyCookieAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
    }
    public function getScope(): string
    {
        return 'apiKeyCookie';
    }
}