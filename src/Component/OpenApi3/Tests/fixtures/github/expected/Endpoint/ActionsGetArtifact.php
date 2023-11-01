<?php

namespace Github\Endpoint;

class ActionsGetArtifact extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $artifact_id;
    /**
     * Gets a specific artifact for a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $artifactId artifact_id parameter
     */
    public function __construct(string $owner, string $repo, int $artifactId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifactId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{artifact_id}'], [$this->owner, $this->repo, $this->artifact_id], '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\Github\Model\Artifact
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Artifact', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}