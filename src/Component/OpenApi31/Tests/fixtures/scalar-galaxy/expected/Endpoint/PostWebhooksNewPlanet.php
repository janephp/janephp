<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint;

class PostWebhooksNewPlanet extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/webhooks/newPlanet';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\BadResponseException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}