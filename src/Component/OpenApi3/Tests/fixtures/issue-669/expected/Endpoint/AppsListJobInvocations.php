<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AppsListJobInvocations extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $app_id;
    /**
     * List all job invocations for an app.
     * @param string $appId The app ID
     * @param array{
     *    "job_names"?: array, //The job names to list job invocations for.
     *    "deployment_id"?: string, //The deployment ID
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "per_page"?: int, //Number of items returned per page
     * } $queryParameters
     */
    public function __construct(string $appId, array $queryParameters = [])
    {
        $this->app_id = $appId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{app_id}'], [rawurlencode($this->app_id)], '/v2/apps/{app_id}/job-invocations');
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
        $optionsResolver->setDefined(['job_names', 'deployment_id', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'per_page' => 20]);
        $optionsResolver->addAllowedTypes('job_names', ['array']);
        $optionsResolver->addAllowedTypes('deployment_id', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['job_names' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AppJobInvocations|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AppJobInvocations', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListJobInvocationsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}