<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AppsGetExec extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $app_id;
    protected $deployment_id;
    protected $component_name;
    /**
     * Returns a websocket URL that allows sending/receiving console input and output to a component of the specified deployment if one exists. Optionally, the instance_name parameter can be provided to retrieve the exec URL for a specific instance. Note that instances are ephemeral; therefore, we recommended to avoid making persistent changes or such scripting around them.
     * @param string $appId The app ID
     * @param string $deploymentId The deployment ID
     * @param string $componentName An optional component name. If set, logs will be limited to this component only.
     * @param array $queryParameters {
     *     @var string $instance_name The name of the actively running ephemeral compute instance
     * }
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
        return str_replace(['{app_id}', '{deployment_id}', '{component_name}'], [$this->app_id, $this->deployment_id, $this->component_name], '/v2/apps/{app_id}/deployments/{deployment_id}/components/{component_name}/exec');
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
        $optionsResolver->setDefined(['instance_name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('instance_name', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AppsGetExecInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AppsGetExecResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AppsGetExecResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetExecUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetExecNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetExecTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AppsGetExecInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}