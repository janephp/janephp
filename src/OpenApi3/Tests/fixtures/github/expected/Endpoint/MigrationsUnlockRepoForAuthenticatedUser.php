<?php

namespace Github\Endpoint;

class MigrationsUnlockRepoForAuthenticatedUser extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $migration_id;
    protected $repo_name;
    /**
     * Unlocks a repository. You can lock repositories when you [start a user migration](https://developer.github.com/v3/migrations/users/#start-a-user-migration). Once the migration is complete you can unlock each repository to begin using it again or [delete the repository](https://developer.github.com/v3/repos/#delete-a-repository) if you no longer need the source data. Returns a status of `404 Not Found` if the repository is not locked.
     *
     * @param int $migrationId migration_id parameter
     * @param string $repoName repo_name parameter
     */
    public function __construct(int $migrationId, string $repoName)
    {
        $this->migration_id = $migrationId;
        $this->repo_name = $repoName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{migration_id}', '{repo_name}'), array($this->migration_id, $this->repo_name), '/user/migrations/{migration_id}/repos/{repo_name}/lock');
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
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserUnauthorizedException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (304 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}