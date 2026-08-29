<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VolumeSnapshotsDeleteById extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $snapshot_id;
    /**
     * To delete a volume snapshot, send a DELETE request to
     * `/v2/volumes/snapshots/$VOLUME_SNAPSHOT_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
     *
     * @param string $snapshotId The unique identifier for the snapshot.
     */
    public function __construct(string $snapshotId)
    {
        $this->snapshot_id = $snapshotId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{snapshot_id}'], [rawurlencode($this->snapshot_id)], '/v2/volumes/snapshots/{snapshot_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsDeleteByIdInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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