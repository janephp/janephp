<?php

namespace Jane\Component\OpenApi3\Tests\FetchModePreload\Endpoint;

class GetPets extends \Jane\Component\OpenApi3\Tests\FetchModePreload\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\FetchModePreload\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\FetchModePreload\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/pets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi3\Tests\FetchModePreload\Exception\GetPetsNotFoundException
     * @throws \Jane\Component\OpenApi3\Tests\FetchModePreload\Exception\BadResponseException
     *
     * @return \Jane\Component\OpenApi3\Tests\FetchModePreload\Model\PetsGetResponse200
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\FetchModePreload\Model\PetsGetResponse200', 'json');
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi3\Tests\FetchModePreload\Exception\GetPetsNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\FetchModePreload\Model\PetsGetResponse404', 'json'), $response);
        }
        throw new \Jane\Component\OpenApi3\Tests\FetchModePreload\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Preload->value;
    }
    public function getTargetClass(): ?string
    {
        return \Jane\Component\OpenApi3\Tests\FetchModePreload\Model\PetsGetResponse200::class;
    }
}