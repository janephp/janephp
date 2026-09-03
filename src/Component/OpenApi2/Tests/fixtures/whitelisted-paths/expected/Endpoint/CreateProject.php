<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Endpoint;

class CreateProject extends \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\BaseEndpoint implements \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\Endpoint
{
    /**
     * Creates a new project object. Returns a project object and a 201 Created response code if the call succeeded.
     * @param \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectsPostBody $payload json payload
     */
    public function __construct(\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\ProjectsPostBody $payload)
    {
        $this->body = $payload;
    }
    use \Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/projects';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedObjectBody($serializer);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Project|\Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Project', 'json');
        }
        return $serializer->deserialize($body, 'Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Model\Error', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }
}