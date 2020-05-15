<?php

namespace Jane\OpenApi2\Tests\Expected\Authentication;

class ApiKeyAuthentication implements \Http\Client\Common\Plugin, \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $request = $request->withHeader('X-API-KEY', $this->{'apiKey'});
        return $next($request);
    }
    public function getScopes() : array
    {
        return array('api_key');
    }
}