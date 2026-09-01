<?php

namespace Docker\Api\Endpoint;

class SwarmInit extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    /**
     * @param \Docker\Api\Model\SwarmInitPostBody $body
     */
    public function __construct(\Docker\Api\Model\SwarmInitPostBody $body)
    {
        $this->body = $body;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/swarm/init';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return $this->getSerializedObjectBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\SwarmInitBadRequestException
     * @throws \Docker\Api\Exception\SwarmInitInternalServerErrorException
     * @throws \Docker\Api\Exception\SwarmInitServiceUnavailableException
     *
     * @return null|string
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            try {
                $decodedBody = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
                return $decodedBody;
            } catch (\JsonException $jsonException) {
                throw new \Jane\Component\JsonSchemaRuntime\Exception\MalformedJsonException('Malformed JSON response body.', 0, $jsonException);
            }
        }
        if (400 === $status) {
            throw new \Docker\Api\Exception\SwarmInitBadRequestException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\SwarmInitInternalServerErrorException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\SwarmInitServiceUnavailableException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
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