<?php

namespace Github\Endpoint;

class TeamsListDiscussionCommentsLegacy extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $team_id;
    protected $discussion_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [List discussion comments](https://developer.github.com/v3/teams/discussion_comments/#list-discussion-comments) endpoint.
    
    List all comments on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param array $queryParameters {
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    */
    public function __construct(int $teamId, int $discussionNumber, array $queryParameters = [])
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{team_id}', '{discussion_number}'], [$this->team_id, $this->discussion_number], '/teams/{team_id}/discussions/{discussion_number}/comments');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['direction', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['direction' => 'desc', 'per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('direction', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\TeamDiscussionComment[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamDiscussionComment[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}