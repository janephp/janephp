<?php

namespace Docker\Api\Endpoint;

class ContainerDelete extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id ID or name of the container
     * @param array $queryParameters {
     *     @var bool $v Remove anonymous volumes associated with the container.
     *     @var bool $force If the container is running, kill it before removing it.
     *     @var bool $link Remove the specified link associated with the container.
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
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}');
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
        $optionsResolver->setDefined(['v', 'force', 'link']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['v' => false, 'force' => false, 'link' => false]);
        $optionsResolver->addAllowedTypes('v', ['bool']);
        $optionsResolver->addAllowedTypes('force', ['bool']);
        $optionsResolver->addAllowedTypes('link', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\ContainerDeleteBadRequestException
     * @throws \Docker\Api\Exception\ContainerDeleteNotFoundException
     * @throws \Docker\Api\Exception\ContainerDeleteConflictException
     * @throws \Docker\Api\Exception\ContainerDeleteInternalServerErrorException
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
        if (400 === $status) {
            throw new \Docker\Api\Exception\ContainerDeleteBadRequestException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\ContainerDeleteNotFoundException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (409 === $status) {
            throw new \Docker\Api\Exception\ContainerDeleteConflictException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ContainerDeleteInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}