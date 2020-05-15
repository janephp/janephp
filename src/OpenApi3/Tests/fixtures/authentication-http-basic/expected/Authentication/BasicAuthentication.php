<?php

namespace Jane\OpenApi3\Tests\Expected\Authentication;

class BasicAuthentication implements \Http\Client\Common\Plugin, \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $username;
    private $password;
    public function __construct(string $username, string $password)
    {
        $this->{'username'} = $username;
        $this->{'password'} = $password;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $header = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->{'username'}, $this->{'password'})));
        $request = $request->withHeader('Authorization', $header);
        return $next($request);
    }
    public function getScopes() : array
    {
        return array('Basic');
    }
}