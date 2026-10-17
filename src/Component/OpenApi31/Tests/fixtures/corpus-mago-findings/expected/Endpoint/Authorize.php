<?php

namespace Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Endpoint;

class Authorize extends \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\Endpoint
{
    use \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/authorize';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => []];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Exception\BadResponseException
     *
     * @return mixed
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
        }
        throw new \Jane\Component\OpenApi31\Tests\Expected\CorpusMagoFindings\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
    public function getTargetClass(): ?string
    {
        return null;
    }
}