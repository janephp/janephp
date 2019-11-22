<?php

namespace Jane\OpenApi\Tests\Expected\Authentication;

class BearerAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
{
    private $token;
    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }
    public function getPlugin() : \Http\Client\Common\Plugin
    {
        return new \Http\Client\Common\Plugin\AuthenticationPlugin(new class($this->{'token'}) implements \Http\Message\Authentication
        {
            private $token;
            public function __construct(string $token)
            {
                $this->{'token'} = $token;
            }
            public function authenticate(\Psr\Http\Message\RequestInterface $request)
            {
                $header = sprintf('Bearer %s', $this->{'token'});
                return $request->withHeader('Authorization', $header);
            }
        });
    }
}