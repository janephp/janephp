<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VolumeSnapshotsGetById extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $snapshot_id;
    /**
     * To retrieve the details of a snapshot that has been created from a volume, send a GET request to `/v2/volumes/snapshots/$VOLUME_SNAPSHOT_ID`.
     *
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{snapshot_id}'], [$this->snapshot_id], '/v2/volumes/snapshots/{snapshot_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsGetByIdInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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