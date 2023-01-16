<?php

namespace Github\Endpoint;

class MigrationsGetStatusForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $migration_id;
    /**
    * Fetches the status of a migration.
    
    The `state` of a migration can be one of the following values:
    
    *   `pending`, which means the migration hasn't started yet.
    *   `exporting`, which means the migration is in progress.
    *   `exported`, which means the migration finished successfully.
    *   `failed`, which means the migration failed.
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{migration_id}'), array($this->org, $this->migration_id), '/orgs/{org}/migrations/{migration_id}');
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
     * @throws \Github\Exception\MigrationsGetStatusForOrgNotFoundException
     *
     * @return null|\Github\Model\Migration
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\Migration', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsGetStatusForOrgNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}