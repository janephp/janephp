<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class CreatePlanet extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Time to play god and create a new planet. What do you think? Ah, don't think too much. What could go wrong anyway?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/planets';
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetForbiddenException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\BadRequestError', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ForbiddenError', 'json'), $response);
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