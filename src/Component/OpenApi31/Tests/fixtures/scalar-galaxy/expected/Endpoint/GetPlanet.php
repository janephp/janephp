<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class GetPlanet extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(array $accept = [])
    {
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/planets/{planetId}';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetPlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\Planet', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\GetPlanetNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}