<?php

namespace Jane\OpenApi2\Tests\Expected\Authentication;

class AccountAuthAuthentication implements \Http\Client\Common\Plugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function handleRequest(\Psr\Http\Message\RequestInterface $request, callable $next, callable $first) : \Http\Promise\Promise
    {
        $request = $request->withHeader('Harvest-Account-Id', $this->{'apiKey'});
        return $next($request);
    }
}