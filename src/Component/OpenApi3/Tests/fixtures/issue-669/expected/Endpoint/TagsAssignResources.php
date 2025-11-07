<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class TagsAssignResources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $tag_id;
    /**
     * Resources can be tagged by sending a POST request to
     * `/v2/tags/$TAG_NAME/resources` with an array of json objects containing
     * `resource_id` and `resource_type` attributes.
     *
     * Currently only tagging of Droplets, Databases, Images, Volumes, and Volume
     * Snapshots is supported. `resource_type` is expected to be the string `droplet`,
     * `database`, `image`, `volume` or `volume_snapshot`. `resource_id` is expected
     * to be the ID of the resource as a string.
     *
     * In order to tag a resource, you must have both `tag:create` and `<resource type>:update` scopes. For example,
     * to tag a Droplet, you must have `tag:create` and `droplet:update`.
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
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{tag_id}'], [$this->tag_id], '/v2/tags/{tag_id}/resources');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\TagsResource) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
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
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\TagsAssignResourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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