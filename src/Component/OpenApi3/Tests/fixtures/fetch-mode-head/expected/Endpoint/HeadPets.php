<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeHead\Endpoint;

class HeadPets extends \Jane\Component\OpenApi3\Tests\FetchModeHead\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\FetchModeHead\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi3\Tests\FetchModeHead\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'HEAD';
    }
    public function getUri(): string
    {
        return '/pets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
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
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Preload->value;
    }
}