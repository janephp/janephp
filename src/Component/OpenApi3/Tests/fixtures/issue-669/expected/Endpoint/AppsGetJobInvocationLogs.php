<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AppsGetJobInvocationLogs extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $job_name;
    protected $job_invocation_id;
    /**
     * Retrieve the logs of a past, in-progress, or active deployment. If a component name is specified, the logs will be limited to only that component. If deployment is omitted the active deployment will be selected (if available). The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment.
     * @param string $appId The app ID
     * @param string $jobName The job name to list job invocations for.
     * @param string $jobInvocationId The ID of the job invocation to retrieve.
     * @param array{
     *    "deployment_id"?: string, //The deployment ID
     *    "follow"?: bool, //Whether the logs should follow live updates.
     *    "type": string, //The type of logs to retrieve
     *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
     *    "tail_lines"?: string, //The number of lines from the end of the logs to retrieve.
     * } $queryParameters
     */
    public function __construct(string $appId, string $jobName, string $jobInvocationId, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->job_name = $jobName;
        $this->job_invocation_id = $jobInvocationId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{app_id}', '{job_name}', '{job_invocation_id}'], [rawurlencode($this->app_id), rawurlencode($this->job_name), rawurlencode($this->job_invocation_id)], '/v2/apps/{app_id}/jobs/{job_name}/invocations/{job_invocation_id}/logs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
        $optionsResolver->setDefined(['deployment_id', 'follow', 'type', 'pod_connection_timeout', 'tail_lines']);
        $optionsResolver->setRequired(['type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('deployment_id', ['string']);
        $optionsResolver->addAllowedTypes('follow', ['bool']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('pod_connection_timeout', ['string']);
        $optionsResolver->addAllowedTypes('tail_lines', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetJobInvocationLogsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}