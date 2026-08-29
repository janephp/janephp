<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VolumeSnapshotsCreate extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $volume_id;
    /**
     * To create a snapshot from a volume, sent a POST request to `/v2/volumes/$VOLUME_ID/snapshots`.
     * @param string $volumeId The ID of the block storage volume.
     * @param \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody $requestBody
     */
    public function __construct(string $volumeId, \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody $requestBody)
    {
        $this->volume_id = $volumeId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{volume_id}'], [rawurlencode($this->volume_id)], '/v2/volumes/{volume_id}/snapshots');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateBadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeSnapshotsCreateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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