<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Authentication;

class BearerAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['Authorization'] = $this->{'apiKey'};
    }
    public function getScope(): string
    {
        return 'BearerAuth';
    }
}