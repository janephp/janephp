<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsGetDestroyAssociatedResourcesStatus extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    /**
     * To check on the status of a request to destroy a Droplet with its associated
     * resources, send a GET request to the
     * `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/status` endpoint.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     */
    public function __construct(int $dropletId)
    {
        $this->droplet_id = $dropletId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{droplet_id}'], [rawurlencode($this->droplet_id)], '/v2/droplets/{droplet_id}/destroy_with_associated_resources/status');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsGetDestroyAssociatedResourcesStatusInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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