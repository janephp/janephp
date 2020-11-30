<?php

namespace Github\Endpoint;

class MigrationsUnlockRepoForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $migration_id;
    protected $repo_name;
    /**
     * Unlocks a repository that was locked for migration. You should unlock each migrated repository and [delete them](https://developer.github.com/v3/repos/#delete-a-repository) when the migration is complete and you no longer need the source data.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     * @param string $repoName repo_name parameter
     */
    public function __construct(string $org, int $migrationId, string $repoName)
    {
        $this->org = $org;
        $this->migration_id = $migrationId;
        $this->repo_name = $repoName;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{migration_id}', '{repo_name}'), array($this->org, $this->migration_id, $this->repo_name), '/orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock');
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
     * @throws \Github\Exception\MigrationsUnlockRepoForOrgNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsUnlockRepoForOrgNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}