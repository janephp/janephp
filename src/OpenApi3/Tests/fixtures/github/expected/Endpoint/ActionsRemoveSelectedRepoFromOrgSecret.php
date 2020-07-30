<?php

namespace Github\Endpoint;

class ActionsRemoveSelectedRepoFromOrgSecret extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    protected $secret_name;
    protected $repository_id;
    /**
     * Removes a repository from an organization secret when the `visibility` for repository access is set to `selected`. The visibility is set when you [Create or update an organization secret](https://developer.github.com/v3/actions/secrets/#create-or-update-an-organization-secret). You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
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
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{secret_name}', '{repository_id}'), array($this->org, $this->secret_name, $this->repository_id), '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ActionsRemoveSelectedRepoFromOrgSecretConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (409 === $status) {
            throw new \Github\Exception\ActionsRemoveSelectedRepoFromOrgSecretConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}