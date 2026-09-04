<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationHttpBasic\Authentication;

class BasicAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $username;
    private $password;
    public function __construct(string $username, string $password)
    {
        $this->{'username'} = $username;
        $this->{'password'} = $password;
    }
    public function decorate(string $method, string $url, array &$options): void
    {
        $options['headers']['Authorization'] = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->{'username'}, $this->{'password'})));
    }
    public function getScope(): string
    {
        return 'Basic';
    }
}