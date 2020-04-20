<?php

namespace Jane\OpenApi2\Tests\Expected\Authentication;

class BearerAuthAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function getPlugin() : \Http\Client\Common\Plugin
    {
        return new \Http\Client\Common\Plugin\AuthenticationPlugin(new class($this->{'apiKey'}) implements \Http\Message\Authentication
        {
            private $apiKey;
            public function __construct(string $apiKey)
            {
                $this->{'apiKey'} = $apiKey;
            }
            public function authenticate(\Psr\Http\Message\RequestInterface $request)
            {
                return $request->withHeader('Authorization', $this->{'apiKey'});
            }
        });
    }
}