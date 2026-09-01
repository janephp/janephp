<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint;

class UpdateCompany extends \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\Endpoint
{
    /**
     * Updates the company setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a company object and a 200 OK response code if the call succeeded.
     * @param \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody $payload json payload
     */
    public function __construct(\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\CompanyPatchBody $payload)
    {
        $this->body = $payload;
    }
    use \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return '/company';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return $this->getSerializedObjectBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Company|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Company', 'json');
        }
        return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}