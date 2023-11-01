<?php

namespace Github\Endpoint;

class InteractionsSetRestrictionsForRepo extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
     * Temporarily restricts interactions to certain GitHub users within the given repository. You must have owner or admin access to set restrictions.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoInteractionLimitsPutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoInteractionLimitsPutBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/interaction-limits');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoInteractionLimitsPutBody) {
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
     * @return null|\Github\Model\InteractionLimit
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\InteractionLimit', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}