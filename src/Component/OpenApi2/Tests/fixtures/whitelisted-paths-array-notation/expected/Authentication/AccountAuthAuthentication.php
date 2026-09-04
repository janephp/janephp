<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Authentication;

class AccountAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['Harvest-Account-Id'] = $this->{'apiKey'};
    }
    public function getScope(): string
    {
        return 'AccountAuth';
    }
}