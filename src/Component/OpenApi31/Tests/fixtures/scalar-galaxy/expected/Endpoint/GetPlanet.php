<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class GetPlanet extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    protected $planetId;
    protected $accept;
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(int $planetId, array $accept = [])
    {
        $this->planetId = $planetId;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{planetId}'], [rawurlencode($this->planetId)], '/planets/{planetId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetPlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet', 'json');
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetPlanetNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}