<?php

namespace Jane\OpenApi3\Tests\Expected\Authentication;

class XHeaderAuthentication implements \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('X-API-KEY', $this->{'apiKey'});
        return $request;
    }
    public function getScope() : string
    {
        return 'x-header';
    }
}