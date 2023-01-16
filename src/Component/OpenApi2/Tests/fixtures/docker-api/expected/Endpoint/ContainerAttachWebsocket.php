<?php

namespace Docker\Api\Endpoint;

class ContainerAttachWebsocket extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * 
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var string $detachKeys Override the key sequence for detaching a container.Format is a single
    character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`,
    `@`, `^`, `[`, `,`, or `_`.
    
    *     @var bool $logs Return logs
    *     @var bool $stream Return stream
    *     @var bool $stdin Attach to `stdin`
    *     @var bool $stdout Attach to `stdout`
    *     @var bool $stderr Attach to `stderr`
    * }
    */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/attach/ws');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('detachKeys', 'logs', 'stream', 'stdin', 'stdout', 'stderr'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('logs' => false, 'stream' => false, 'stdin' => false, 'stdout' => false, 'stderr' => false));
        $optionsResolver->addAllowedTypes('detachKeys', array('string'));
        $optionsResolver->addAllowedTypes('logs', array('bool'));
        $optionsResolver->addAllowedTypes('stream', array('bool'));
        $optionsResolver->addAllowedTypes('stdin', array('bool'));
        $optionsResolver->addAllowedTypes('stdout', array('bool'));
        $optionsResolver->addAllowedTypes('stderr', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketBadRequestException
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketNotFoundException
     * @throws \Docker\Api\Exception\ContainerAttachWebsocketInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (101 === $status) {
            return null;
        }
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\Api\Exception\ContainerAttachWebsocketBadRequestException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\ContainerAttachWebsocketNotFoundException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ContainerAttachWebsocketInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}