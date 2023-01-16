<?php

namespace Github\Endpoint;

class ActionsDownloadArtifact extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $artifact_id;
    protected $archive_format;
    /**
    * Gets a redirect URL to download an archive for a repository. This URL expires after 1 minute. Look for `Location:` in
    the response header to find the URL for the download. The `:archive_format` must be `zip`. Anyone with read access to
    the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope.
    GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $artifactId artifact_id parameter
    * @param string $archiveFormat archive_format parameter
    */
    public function __construct(string $owner, string $repo, int $artifactId, string $archiveFormat)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->artifact_id = $artifactId;
        $this->archive_format = $archiveFormat;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{artifact_id}', '{archive_format}'), array($this->owner, $this->repo, $this->artifact_id, $this->archive_format), '/repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (302 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}