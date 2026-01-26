<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class NfsDeleteSnapshot extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $nfs_snapshot_id;
    /**
     * To delete an NFS snapshot, send a DELETE request to `/v2/nfs/snapshots/{nfs_snapshot_id}?region=${region}`.
     *
     * A successful request will return a `204 No Content` status code.
     *
     * @param string $nfsSnapshotId The unique ID of the NFS snapshot
     * @param array{
     *    "region": string, //The DigitalOcean region slug (e.g., nyc2, atl1) where the NFS share resides.
     * } $queryParameters
     */
    public function __construct(string $nfsSnapshotId, array $queryParameters = [])
    {
        $this->nfs_snapshot_id = $nfsSnapshotId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{nfs_snapshot_id}'], [$this->nfs_snapshot_id], '/v2/nfs/snapshots/{nfs_snapshot_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['region']);
        $optionsResolver->setRequired(['region']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('region', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotInternalServerErrorException
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
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsDeleteSnapshotInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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