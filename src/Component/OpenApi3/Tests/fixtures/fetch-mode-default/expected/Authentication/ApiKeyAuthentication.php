<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Authentication;

class ApiKeyAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['X-Api-Key'] = $this->{'apiKey'};
    }
    public function getScope(): string
    {
        return 'apiKey';
    }
}