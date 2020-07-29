<?php

namespace Github\Endpoint;

class ReactionsDeleteLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $reaction_id;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Reactions API. We recommend migrating your existing code to use the new delete reactions endpoints. For more information, see this [blog post](https://developer.github.com/changes/2020-02-26-new-delete-reactions-endpoints/).
    
    OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), when deleting a [team discussion](https://developer.github.com/v3/teams/discussions/) or [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/).
    *
    * @param int $reactionId 
    */
    public function __construct(int $reactionId)
    {
        $this->reaction_id = $reactionId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{reaction_id}'), array($this->reaction_id), '/reactions/{reaction_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ReactionsDeleteLegacyForbiddenException
     * @throws \Github\Exception\ReactionsDeleteLegacyUnauthorizedException
     * @throws \Github\Exception\ReactionsDeleteLegacyGoneException
     * @throws \Github\Exception\ReactionsDeleteLegacyUnsupportedMediaTypeException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (304 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsDeleteLegacyForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsDeleteLegacyUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (410 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsDeleteLegacyGoneException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReactionsDeleteLegacyUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}