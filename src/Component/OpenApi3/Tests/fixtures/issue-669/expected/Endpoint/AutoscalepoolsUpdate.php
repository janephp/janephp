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
        return str_replace(['{autoscale_pool_id}'], [$this->autoscale_pool_id], '/v2/droplets/autoscale/{autoscale_pool_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\AutoscalepoolsUpdateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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