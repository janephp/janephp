<?php

namespace Github\Endpoint;

class TeamsUpdateDiscussionCommentLegacy extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $team_id;
    protected $discussion_number;
    protected $comment_number;
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Update a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#update-a-discussion-comment) endpoint.
    
    Edits the body text of a discussion comment. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody 
    */
    public function __construct(int $teamId, int $discussionNumber, int $commentNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody = null)
    {
        $this->team_id = $teamId;
        $this->discussion_number = $discussionNumber;
        $this->comment_number = $commentNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{team_id}', '{discussion_number}', '{comment_number}'), array($this->team_id, $this->discussion_number, $this->comment_number), '/teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
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