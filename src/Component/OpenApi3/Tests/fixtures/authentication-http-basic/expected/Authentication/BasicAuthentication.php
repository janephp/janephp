<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Authentication;

class BasicAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $username;
    private $password;
    public function __construct(string $username, string $password)
    {
        $this->{'username'} = $username;
        $this->{'password'} = $password;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $header = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->{'username'}, $this->{'password'})));
        $request = $request->withHeader('Authorization', $header);
        return $request;
    }
    public function getScope() : string
    {
        return 'Basic';
    }
}