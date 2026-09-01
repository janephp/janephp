<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class NfsGetSnapshot extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $nfs_snapshot_id;
    /**
     * To get an NFS snapshot, send a GET request to `/v2/nfs/snapshots/{nfs_snapshot_id}?region=${region}`.
     *
     * A successful request will return the NFS snapshot.
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
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{nfs_snapshot_id}'], [rawurlencode($this->nfs_snapshot_id)], '/v2/nfs/snapshots/{nfs_snapshot_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\NfsSnapshotGetResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\NfsSnapshotGetResponse', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\NfsGetSnapshotInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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