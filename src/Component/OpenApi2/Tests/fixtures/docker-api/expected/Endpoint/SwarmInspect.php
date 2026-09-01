<?php

namespace Docker\Api\Endpoint;

class SwarmInspect extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/swarm';
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
     * @throws \Docker\Api\Exception\SwarmInspectNotFoundException
     * @throws \Docker\Api\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmInspectServiceUnavailableException
     *
     * @return null|\Docker\Api\Model\Swarm
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return $serializer->deserialize($body, 'Docker\Api\Model\Swarm', 'json');
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\SwarmInspectNotFoundException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\SwarmInspectInternalServerErrorException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\SwarmInspectServiceUnavailableException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}