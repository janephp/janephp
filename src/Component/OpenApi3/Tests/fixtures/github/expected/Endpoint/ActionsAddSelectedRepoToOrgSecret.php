<?php

namespace Github\Endpoint;

class ActionsAddSelectedRepoToOrgSecret extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $secret_name;
    protected $repository_id;
    /**
     * Adds a repository to an organization secret when the `visibility` for repository access is set to `selected`. The visibility is set when you [Create or update an organization secret](https://developer.github.com/v3/actions/secrets/#create-or-update-an-organization-secret). You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param int $repositoryId repository_id parameter
     */
    public function __construct(string $org, string $secretName, int $repositoryId)
    {
        $this->org = $org;
        $this->secret_name = $secretName;
        $this->repository_id = $repositoryId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{secret_name}', '{repository_id}'], [$this->org, $this->secret_name, $this->repository_id], '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ActionsAddSelectedRepoToOrgSecretConflictException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (409 === $status) {
            throw new \Github\Exception\ActionsAddSelectedRepoToOrgSecretConflictException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}