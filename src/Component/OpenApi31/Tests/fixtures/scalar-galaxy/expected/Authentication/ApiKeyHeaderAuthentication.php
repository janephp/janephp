<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Authentication;

class ApiKeyHeaderAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['X-API-Key'] = $this->{'apiKey'};
    }
    public function getScope(): string
    {
        return 'apiKeyHeader';
    }
}