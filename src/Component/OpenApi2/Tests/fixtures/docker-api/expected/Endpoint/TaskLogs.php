<?php

namespace Docker\Api\Endpoint;

class TaskLogs extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Get `stdout` and `stderr` logs from a task.
    See also [`/containers/{id}/logs`](#operation/ContainerLogs).
    
    **Note**: This endpoint works only for services with the `local`,
    `json-file` or `journald` logging drivers.
    
    *
    * @param string $id ID of the task
    * @param array $queryParameters {
    *     @var bool $details Show task context and extra details provided to logs.
    *     @var bool $follow Keep connection after returning logs.
    *     @var bool $stdout Return logs from `stdout`
    *     @var bool $stderr Return logs from `stderr`
    *     @var int $since Only return logs since this time, as a UNIX timestamp
    *     @var bool $timestamps Add timestamps to every log line
    *     @var string $tail Only return this number of log lines from the end of the logs.
    Specify as an integer or `all` to output all log lines.
    
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
        return str_replace(array('{id}'), array($this->id), '/tasks/{id}/logs');
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
        $optionsResolver->setDefined(array('details', 'follow', 'stdout', 'stderr', 'since', 'timestamps', 'tail'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('details' => false, 'follow' => false, 'stdout' => false, 'stderr' => false, 'since' => 0, 'timestamps' => false, 'tail' => 'all'));
        $optionsResolver->addAllowedTypes('details', array('bool'));
        $optionsResolver->addAllowedTypes('follow', array('bool'));
        $optionsResolver->addAllowedTypes('stdout', array('bool'));
        $optionsResolver->addAllowedTypes('stderr', array('bool'));
        $optionsResolver->addAllowedTypes('since', array('int'));
        $optionsResolver->addAllowedTypes('timestamps', array('bool'));
        $optionsResolver->addAllowedTypes('tail', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\TaskLogsNotFoundException
     * @throws \Docker\Api\Exception\TaskLogsInternalServerErrorException
     * @throws \Docker\Api\Exception\TaskLogsServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\TaskLogsNotFoundException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\TaskLogsInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\TaskLogsServiceUnavailableException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}