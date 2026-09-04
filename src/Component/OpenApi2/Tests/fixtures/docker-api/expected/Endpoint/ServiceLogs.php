<?php

namespace Docker\Api\Endpoint;

class ServiceLogs extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get `stdout` and `stderr` logs from a service. See also
     * [`/containers/{id}/logs`](#operation/ContainerLogs).
     *
     * **Note**: This endpoint works only for services with the `local`,
     * `json-file` or `journald` logging drivers.
     *
     * @param string $id ID or name of the service
     * @param array{
     *    "details"?: bool, //Show service context and extra details provided to logs.
     *    "follow"?: bool, //Keep connection after returning logs.
     *    "stdout"?: bool, //Return logs from `stdout`
     *    "stderr"?: bool, //Return logs from `stderr`
     *    "since"?: int, //Only return logs since this time, as a UNIX timestamp
     *    "timestamps"?: bool, //Add timestamps to every log line
     *    "tail"?: string, //Only return this number of log lines from the end of the logs.
     *                     //Specify as an integer or `all` to output all log lines.
     * } $queryParameters
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/services/{id}/logs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['details', 'follow', 'stdout', 'stderr', 'since', 'timestamps', 'tail']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['details' => false, 'follow' => false, 'stdout' => false, 'stderr' => false, 'since' => 0, 'timestamps' => false, 'tail' => 'all']);
        $optionsResolver->addAllowedTypes('details', ['bool']);
        $optionsResolver->addAllowedTypes('follow', ['bool']);
        $optionsResolver->addAllowedTypes('stdout', ['bool']);
        $optionsResolver->addAllowedTypes('stderr', ['bool']);
        $optionsResolver->addAllowedTypes('since', ['int']);
        $optionsResolver->addAllowedTypes('timestamps', ['bool']);
        $optionsResolver->addAllowedTypes('tail', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\ServiceLogsNotFoundException
     * @throws \Docker\Api\Exception\ServiceLogsInternalServerErrorException
     * @throws \Docker\Api\Exception\ServiceLogsServiceUnavailableException
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
        if (404 === $status) {
            throw new \Docker\Api\Exception\ServiceLogsNotFoundException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\ServiceLogsInternalServerErrorException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
        }
        if (503 === $status) {
            throw new \Docker\Api\Exception\ServiceLogsServiceUnavailableException($serializer->deserialize($body, 'Docker\Api\Model\ErrorResponse', 'json'), $response);
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