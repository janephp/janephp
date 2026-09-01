<?php

namespace Jane\Component\OpenApi3\Tests\Expected\FromUrl\Endpoint;

class CreatePets extends \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet $requestBody
     */
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/pets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Pet) {
            return [['Content-Type' => ['application/json']], \Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (201 === $status) {
            return null;
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}