<?php

namespace Jane\OpenApi\Tests\Expected\Authentication;

class BasicAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
{
    private $username;
    private $password;
    public function __construct(string $username, string $password)
    {
        $this->{'username'} = $username;
        $this->{'password'} = $password;
    }
    public function getPlugin() : \Http\Client\Common\Plugin
    {
        return new \Http\Client\Common\Plugin\AuthenticationPlugin(new class($this->{'token'}) implements \Http\Message\Authentication
        {
            private $username;
            private $password;
            public function __construct(string $username, string $password)
            {
                $this->{'username'} = $username;
                $this->{'password'} = $password;
            }
            public function authenticate(\Psr\Http\Message\RequestInterface $request)
            {
                $header = sprintf('Basic %s', base64_encode(sprintf('%s:%s', $this->{'username'}, $this->{'password'})));
                return $request->withHeader('Authorization', $header);
            }
        });
    }
}