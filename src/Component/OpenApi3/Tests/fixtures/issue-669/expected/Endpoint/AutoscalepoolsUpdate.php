<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class AutoscalepoolsUpdate extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $autoscale_pool_id;
    /**
     * To update the configuration of an existing autoscale pool, send a PUT request to
     * `/v2/droplets/autoscale/$AUTOSCALE_POOL_ID`. The request must contain a full representation
     * of the autoscale pool including existing attributes.
     *
     * @param string $autoscalePoolId A unique identifier for an autoscale pool.
     * @param null|\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody
     */
    public function __construct(string $autoscalePoolId, ?\Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate $requestBody = null)
    {
        $this->autoscale_pool_id = $autoscalePoolId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{autoscale_pool_id}'], [rawurlencode($this->autoscale_pool_id)], '/v2/droplets/autoscale/{autoscale_pool_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate) {
            return [['Content-Type' => ['application/json']], \Jane\Generated\DigitalOcean\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}