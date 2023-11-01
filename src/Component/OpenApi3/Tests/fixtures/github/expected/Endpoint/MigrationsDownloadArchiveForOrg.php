<?php

namespace Github\Endpoint;

class MigrationsDownloadArchiveForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $migration_id;
    /**
     * Fetches the URL to a migration archive.
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
        return str_replace(['{org}', '{migration_id}'], [$this->org, $this->migration_id], '/orgs/{org}/migrations/{migration_id}/archive');
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
     * @throws \Github\Exception\MigrationsDownloadArchiveForOrgNotFoundException
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
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsDownloadArchiveForOrgNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}