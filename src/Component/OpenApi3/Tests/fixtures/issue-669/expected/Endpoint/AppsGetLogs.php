<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AppsGetLogs extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $deployment_id;
    protected $component_name;
    /**
    * Retrieve the logs of a past, in-progress, or active deployment. The response will include links to either real-time logs of an in-progress or active deployment or archived logs of a past deployment.
    * @param string $appId The app ID
    * @param string $deploymentId The deployment ID
    * @param string $componentName An optional component name. If set, logs will be limited to this component only.
    * @param array{
    *    "follow"?: bool, //Whether the logs should follow live updates.
    *    "type": string, //The type of logs to retrieve
    - BUILD: Build-time logs
    - DEPLOY: Deploy-time logs
    - RUN: Live run-time logs
    - RUN_RESTARTED: Logs of crashed/restarted instances during runtime
    *    "pod_connection_timeout"?: string, //An optional time duration to wait if the underlying component instance is not immediately available. Default: `3m`.
    * } $queryParameters
    */
    public function __construct(string $appId, string $deploymentId, string $componentName, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->deployment_id = $deploymentId;
        $this->component_name = $componentName;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{app_id}', '{deployment_id}', '{component_name}'], [rawurlencode($this->app_id), rawurlencode($this->deployment_id), rawurlencode($this->component_name)], '/v2/apps/{app_id}/deployments/{deployment_id}/components/{component_name}/logs');
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
        $optionsResolver->setDefined(['follow', 'type', 'pod_connection_timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('follow', ['bool']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('pod_connection_timeout', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetLogsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetLogsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetLogsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetLogsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetLogsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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