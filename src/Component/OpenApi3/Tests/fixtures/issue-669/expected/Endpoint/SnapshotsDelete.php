<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class SnapshotsDelete extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $snapshot_id;
    /**
     * Both Droplet and volume snapshots are managed through the `/v2/snapshots/`
     * endpoint. To delete a snapshot, send a DELETE request to
     * `/v2/snapshots/$SNAPSHOT_ID`.
     *
     * A status of 204 will be given. This indicates that the request was processed
     * successfully, but that no response body is needed.
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{snapshot_id}'], [$this->snapshot_id], '/v2/snapshots/{snapshot_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteInternalServerErrorException
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
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteBadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsDeleteInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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