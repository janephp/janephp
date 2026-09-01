<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class UpdatePlanet extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    protected $planetId;
    protected $accept;
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, array $accept = [])
    {
        $this->planetId = $planetId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{planetId}'], [rawurlencode($this->planetId)], '/planets/{planetId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet) {
            return [['Content-Type' => ['application/xml']], $this->body];
        }
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetNotFoundException
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
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\BadRequestError', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}