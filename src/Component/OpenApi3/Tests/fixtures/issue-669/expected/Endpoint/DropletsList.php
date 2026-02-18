<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsList extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To list all Droplets in your account, send a GET request to `/v2/droplets`.
     *
     * The response body will be a JSON object with a key of `droplets`. This will be
     * set to an array containing objects each representing a Droplet. These will
     * contain the standard Droplet attributes.
     *
     * ### Filtering Results by Tag
     *
     * It's possible to request filtered results by including certain query parameters.
     * To only list Droplets assigned to a specific tag, include the `tag_name` query
     * parameter set to the name of the tag in your GET request. For example,
     * `/v2/droplets?tag_name=$TAG_NAME`.
     *
     * ### GPU Droplets
     *
     * By default, only non-GPU Droplets are returned. To list only GPU Droplets, set
     * the `type` query parameter to `gpus`. For example, `/v2/droplets?type=gpus`.
     *
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     *    "tag_name"?: string, //Used to filter Droplets by a specific tag. Can not be combined with `name` or `type`.<br>Requires `tag:read` scope.
     *    "name"?: string, //Used to filter list response by Droplet name returning only exact matches. It is case-insensitive and can not be combined with `tag_name`.
     *    "type"?: string, //When `type` is set to `gpus`, only GPU Droplets will be returned. By default, only non-GPU Droplets are returned. Can not be combined with `tag_name`.
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
        return '/v2/droplets';
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
        $optionsResolver->setDefined(['per_page', 'page', 'tag_name', 'name', 'type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('tag_name', ['string']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsListInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAllDroplets|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAllDroplets', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsListInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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