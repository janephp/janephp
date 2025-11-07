<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class SpacesKeyList extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To list Spaces Access Key, send a GET request to `/v2/spaces/keys`. Sort parameter must be used with Sort Direction.
     *
     * @param array $queryParameters {
     *     @var int $per_page Number of items returned per page
     *     @var int $page Which 'page' of paginated results to return.
     *     @var string $sort The field to sort by.
     *     @var string $sort_direction The direction to sort by. Possible values are `asc` or `desc`.
     *     @var string $name The access key's name.
     *     @var string $bucket The bucket's name.
     *     @var string $permission The permission of the access key. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
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
        return '/v2/spaces/keys';
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
        $optionsResolver->setDefined(['per_page', 'page', 'sort', 'sort_direction', 'name', 'bucket', 'permission']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1, 'sort' => 'created_at', 'sort_direction' => 'desc']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('sort_direction', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('bucket', ['string']);
        $optionsResolver->addAllowedTypes('permission', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\SpacesKeyListInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseKeyList|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseKeyList', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SpacesKeyListUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SpacesKeyListTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\SpacesKeyListInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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