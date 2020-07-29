<?php

namespace Github\Endpoint;

class TeamsGetDiscussionCommentLegacy extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $team_id;
    protected $discussion_number;
    protected $comment_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Get a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#get-a-discussion-comment) endpoint.
    
    Get a specific comment on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    */
    public function __construct(int $teamId, int $discussionNumber, int $commentNumber)
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
        $this->comment_number = $commentNumber;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{discussion_number}', '{comment_number}'), array($this->team_id, $this->discussion_number, $this->comment_number), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}');
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
     *
     * @return null|\Github\Model\TeamDiscussionComment
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\TeamDiscussionComment', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}