<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationHttpBearer\Authentication;

class BearerAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
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
        return 'Bearer';
    }
}