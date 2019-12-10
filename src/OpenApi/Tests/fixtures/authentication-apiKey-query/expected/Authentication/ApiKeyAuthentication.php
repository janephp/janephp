<?php

namespace Jane\OpenApi\Tests\Expected\Authentication;

class ApiKeyAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
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
                $uri = $request->getUri();
                $query = $uri->getQuery();
                $params = array();
                parse_str($query, $params);
                $params = array_merge($params, array('api_key' => $this->{'apiKey'}));
                $query = http_build_query($params, null, '&');
                $uri = $uri->withQuery($query);
                return $request->withUri($uri);
            }
        });
    }
}