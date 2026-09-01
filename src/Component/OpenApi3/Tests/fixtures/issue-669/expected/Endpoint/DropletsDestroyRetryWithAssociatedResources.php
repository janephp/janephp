<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsDestroyRetryWithAssociatedResources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    /**
     * If the status of a request to destroy a Droplet with its associated resources
     * reported any errors, it can be retried by sending a POST request to the
     * `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/retry` endpoint.
     *
     * Only one destroy can be active at a time per Droplet. If a retry is issued
     * while another destroy is in progress for the Droplet a 409 status code will
     * be returned. A successful response will include a 202 response code and no
     * content.
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
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{droplet_id}'], [rawurlencode($this->droplet_id)], '/v2/droplets/{droplet_id}/destroy_with_associated_resources/retry');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesConflictException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesConflictException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyRetryWithAssociatedResourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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