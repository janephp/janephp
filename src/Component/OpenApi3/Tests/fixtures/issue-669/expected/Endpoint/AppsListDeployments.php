<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AppsListDeployments extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $app_id;
    /**
    * List all deployments of an app.
    * @param string $appId The app ID
    * @param array{
    *    "page"?: int, //Which 'page' of paginated results to return.
    *    "per_page"?: int, //Number of items returned per page
    *    "deployment_types"?: array, //Optional. Filter deployments by deployment_type
     - MANUAL: manual deployment
     - DEPLOY_ON_PUSH: deployment triggered by a push to the app's repository
     - MAINTENANCE: deployment for maintenance purposes
     - MANUAL_ROLLBACK: manual revert to a previous deployment
     - AUTO_ROLLBACK: automatic revert to a previous deployment
     - UPDATE_DATABASE_TRUSTED_SOURCES: update database trusted sources
     - AUTOSCALED: deployment that has been autoscaled
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
        return str_replace(['{app_id}'], [rawurlencode($this->app_id)], '/v2/apps/{app_id}/deployments');
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
        $optionsResolver->setDefined(['page', 'per_page', 'deployment_types']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'per_page' => 20]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('deployment_types', ['array']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['deployment_types' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AppsDeploymentsResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AppsDeploymentsResponse', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsListDeploymentsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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