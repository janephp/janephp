<?php

namespace Github\Endpoint;

class MigrationsDeleteArchiveForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $migration_id;
    /**
     * Deletes a previous migration archive. Migration archives are automatically deleted after seven days.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     */
    public function __construct(string $org, int $migrationId)
    {
        $this->org = $org;
        $this->migration_id = $migrationId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{migration_id}'), array($this->org, $this->migration_id), '/orgs/{org}/migrations/{migration_id}/archive');
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
     * @throws \Github\Exception\MigrationsDeleteArchiveForOrgNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\MigrationsDeleteArchiveForOrgNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}