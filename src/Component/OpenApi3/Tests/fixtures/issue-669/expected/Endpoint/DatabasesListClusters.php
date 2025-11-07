<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DatabasesListClusters extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To list all of the database clusters available on your account, send a GET request to `/v2/databases`. To limit the results to database clusters with a specific tag, include the `tag_name` query parameter set to the name of the tag. For example, `/v2/databases?tag_name=$TAG_NAME`.
     *
     * The result will be a JSON object with a `databases` key. This will be set to an array of database objects, each of which will contain the standard database attributes.
     *
     * The embedded `connection` and `private_connection` objects will contain the information needed to access the database cluster. For multi-node clusters, the `standby_connection` and `standby_private_connection` objects will contain the information needed to connect to the cluster's standby node(s).
     *
     * The embedded `maintenance_window` object will contain information about any scheduled maintenance for the database cluster.
     * @param array $queryParameters {
     *     @var string $tag_name Limits the results to database clusters with a specific tag.<br><br>Requires `tag:read` scope.
     * }
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
        return '/v2/databases';
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
        $optionsResolver->setDefined(['tag_name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('tag_name', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseDatabaseClusters|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseDatabaseClusters', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DatabasesListClustersInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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