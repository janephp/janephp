<?php

namespace Jane\OpenApi\Tests\Expected\Authentication;

class BasicAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function getPlugin() : \Http\Client\Common\Plugin
    {
        return new \Http\Client\Common\Plugin\AuthenticationPlugin(new \Http\Message\Authentication\Bearer($this->{'token'}));
    }
}