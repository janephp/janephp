<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class UpdatePlanet extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $planetId;
    protected $accept;
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody = null, array $accept = [])
    {
        $this->planetId = $planetId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{planetId}'], [$this->planetId], '/planets/{planetId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\Planet) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\Planet) {
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetNotFoundException
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
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}