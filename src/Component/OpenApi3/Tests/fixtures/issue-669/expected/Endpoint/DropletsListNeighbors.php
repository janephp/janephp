<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsListNeighbors extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    /**
     * To retrieve a list of any "neighbors" (i.e. Droplets that are co-located on
     * the same physical hardware) for a specific Droplet, send a GET request to
     * `/v2/droplets/$DROPLET_ID/neighbors`.
     *
     * The results will be returned as a JSON object with a key of `droplets`. This
     * will be set to an array containing objects representing any other Droplets
     * that share the same physical hardware. An empty array indicates that the
     * Droplet is not co-located any other Droplets associated with your account.
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
        return str_replace(['{droplet_id}'], [rawurlencode($this->droplet_id)], '/v2/droplets/{droplet_id}/neighbors');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseNeighborDroplets|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseNeighborDroplets', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListNeighborsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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