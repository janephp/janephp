<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Endpoint;

class RetrieveCompany extends \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\Endpoint
{
    use \Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/company';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Company|\Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Company', 'json');
        }
        return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Model\Error', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }
}