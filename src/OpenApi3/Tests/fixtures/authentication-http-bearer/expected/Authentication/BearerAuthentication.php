<?php

namespace Jane\OpenApi3\Tests\Expected\Authentication;

class BearerAuthentication implements \Http\Client\Common\Plugin
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $header = sprintf('Bearer %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);
        return $next($request);
    }
}