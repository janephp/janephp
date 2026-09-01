<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963\Authentication;

class BearerAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['Authorization'] = sprintf('Bearer %s', $this->{'token'});
    }
    public function getScope(): string
    {
        return 'bearerAuth';
    }
}