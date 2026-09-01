<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class SnapshotsList extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To list all of the snapshots available on your account, send a GET request to
     * `/v2/snapshots`.
     *
     * The response will be a JSON object with a key called `snapshots`. This will be
     * set to an array of `snapshot` objects, each of which will contain the standard
     * snapshot attributes.
     *
     * ### Filtering Results by Resource Type
     *
     * It's possible to request filtered results by including certain query parameters.
     *
     * #### List Droplet Snapshots
     *
     * To retrieve only snapshots based on Droplets, include the `resource_type`
     * query parameter set to `droplet`. For example, `/v2/snapshots?resource_type=droplet`.
     *
     * #### List Volume Snapshots
     *
     * To retrieve only snapshots based on volumes, include the `resource_type`
     * query parameter set to `volume`. For example, `/v2/snapshots?resource_type=volume`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "resource_type"?: string, //Used to filter snapshots by a resource type.
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/snapshots';
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
        $optionsResolver->setDefined(['per_page', 'page', 'resource_type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('resource_type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SnapshotsListInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseSnapshots|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseSnapshots', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsListUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsListTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SnapshotsListInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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