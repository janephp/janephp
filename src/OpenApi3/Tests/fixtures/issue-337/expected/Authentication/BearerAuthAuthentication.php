<?php

namespace CreditSafe\API\Authentication;

class BearerAuthAuthentication implements \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $header = sprintf('Bearer %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);
        return $request;
    }
    public function getScope() : string
    {
        return 'bearerAuth';
    }
}