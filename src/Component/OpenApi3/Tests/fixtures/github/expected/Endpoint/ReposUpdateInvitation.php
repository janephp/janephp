<?php

namespace Github\Endpoint;

class ReposUpdateInvitation extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $invitation_id;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $invitationId invitation_id parameter
     * @param null|\Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $invitationId, ?\Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->invitation_id = $invitationId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{invitation_id}'], [$this->owner, $this->repo, $this->invitation_id], '/repos/{owner}/{repo}/invitations/{invitation_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Github\Model\RepositoryInvitation
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\RepositoryInvitation', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}