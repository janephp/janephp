<?php

namespace Github\Endpoint;

class ReactionsListForTeamDiscussionInOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $team_slug;
    protected $discussion_number;
    /**
     * List the reactions to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/:org_id/team/:team_id/discussions/:discussion_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a team discussion.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     */
    public function __construct(string $org, string $teamSlug, int $discussionNumber, array $queryParameters = [])
    {
        $this->org = $org;
        $this->team_slug = $teamSlug;
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
        return str_replace(['{org}', '{team_slug}', '{discussion_number}'], [$this->org, $this->team_slug, $this->discussion_number], '/orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions');
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
        $optionsResolver->setDefined(['content', 'per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 30, 'page' => 1]);
        $optionsResolver->addAllowedTypes('content', ['string']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\Reaction[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Reaction[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}