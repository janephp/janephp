<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class SnapshotsGet extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $snapshot_id;
    /**
     * To retrieve information about a snapshot, send a GET request to
     * `/v2/snapshots/$SNAPSHOT_ID`.
     *
     * The response will be a JSON object with a key called `snapshot`. The value of
     * this will be an snapshot object containing the standard snapshot attributes.
     *
     * @param mixed $snapshotId Either the ID of an existing snapshot. This will be an integer for a Droplet snapshot or a string for a volume snapshot.
     */
    public function __construct($snapshotId)
    {
        $this->snapshot_id = $snapshotId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{snapshot_id}'], [rawurlencode($this->snapshot_id)], '/v2/snapshots/{snapshot_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsGetInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseSnapshotsExisting|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseSnapshotsExisting', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsGetBadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsGetUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsGetNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsGetTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsGetInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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