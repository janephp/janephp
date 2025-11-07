<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsDestroyByTag extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To delete **all** Droplets assigned to a specific tag, include the `tag_name`
     * query parameter set to the name of the tag in your DELETE request. For
     * example, `/v2/droplets?tag_name=$TAG_NAME`.
     *
     * This endpoint requires `tag:read` scope.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param array $queryParameters {
     *     @var string $tag_name Specifies Droplets to be deleted by tag.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
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
        $optionsResolver->setDefined(['tag_name']);
        $optionsResolver->setRequired(['tag_name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('tag_name', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyByTagInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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