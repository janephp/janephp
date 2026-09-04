<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class TagsUnassignResources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $tag_id;
    /**
     * Resources can be untagged by sending a DELETE request to
     * `/v2/tags/$TAG_NAME/resources` with an array of json objects containing
     * `resource_id` and `resource_type` attributes.
     *
     * Currently only untagging of Droplets, Databases, Images, Volumes, and Volume
     * Snapshots is supported. `resource_type` is expected to be the string `droplet`,
     * `database`, `image`, `volume` or `volume_snapshot`. `resource_id` is expected
     * to be the ID of the resource as a string.
     *
     * In order to untag a resource, you must have both `tag:delete` and `<resource type>:update` scopes. For example,
     * to untag a Droplet, you must have `tag:delete` and `droplet:update`.
     *
     * @param string $tagId The name of the tag. Tags may contain letters, numbers, colons, dashes, and underscores. There is a limit of 255 characters per tag.
     * @param \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody
     */
    public function __construct(string $tagId, \Jane\Generated\DigitalOcean\Model\TagsResource $requestBody)
    {
        $this->tag_id = $tagId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{tag_id}'], [rawurlencode($this->tag_id)], '/v2/tags/{tag_id}/resources');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\TagsResource) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (204 === $status) {
            return null;
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsUnassignResourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}