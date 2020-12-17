<?php

namespace Github\Endpoint;

class ReactionsCreateForTeamDiscussionCommentInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $discussion_number;
    protected $comment_number;
    /**
     * Create a reaction to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion comment.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `POST /organizations/:org_id/team/:team_id/discussions/:discussion_number/comments/:comment_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody 
     */
    public function __construct(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody = null)
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
        $this->discussion_number = $discussionNumber;
        $this->comment_number = $commentNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{team_slug}', '{discussion_number}', '{comment_number}'), array($this->org, $this->team_slug, $this->discussion_number, $this->comment_number), '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody) {
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
     * @return null|\Github\Model\Reaction
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}