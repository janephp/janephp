<?php

namespace Docker\Api\Endpoint;

class ContainerKill extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Send a POSIX signal to a container, defaulting to killing to the
    container.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var string $signal Signal to send to the container as an integer or string (e.g. `SIGINT`)
    * }
    */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/kill');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['signal']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['signal' => 'SIGKILL']);
        $optionsResolver->addAllowedTypes('signal', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\ContainerKillNotFoundException
     * @throws \Docker\Api\Exception\ContainerKillConflictException
     * @throws \Docker\Api\Exception\ContainerKillInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\ContainerKillNotFoundException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \Docker\Api\Exception\ContainerKillConflictException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ContainerKillInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}