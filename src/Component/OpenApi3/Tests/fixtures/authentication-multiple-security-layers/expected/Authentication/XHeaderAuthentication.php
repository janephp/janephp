<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationMultipleSecurityLayers\Authentication;

class XHeaderAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['X-API-KEY'] = $this->{'apiKey'};
    }
    public function getScope(): string
    {
        return 'x-header';
    }
}