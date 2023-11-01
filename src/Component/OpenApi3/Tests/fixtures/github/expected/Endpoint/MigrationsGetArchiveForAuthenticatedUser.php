<?php

namespace Github\Endpoint;

class MigrationsGetArchiveForAuthenticatedUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $migration_id;
    /**
    * Fetches the URL to download the migration archive as a `tar.gz` file. Depending on the resources your repository uses, the migration archive can contain JSON files with data for these objects:
    
    *   attachments
    *   bases
    *   commit\_comments
    *   issue\_comments
    *   issue\_events
    *   issues
    *   milestones
    *   organizations
    *   projects
    *   protected\_branches
    *   pull\_request\_reviews
    *   pull\_requests
    *   releases
    *   repositories
    *   review\_comments
    *   schema
    *   users
    
    The archive will also contain an `attachments` directory that includes all attachment files uploaded to GitHub.com and a `repositories` directory that contains the repository's Git data.
    *
    * @param int $migrationId migration_id parameter
    */
    public function __construct(int $migrationId)
    {
        $this->migration_id = $migrationId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{migration_id}'], [$this->migration_id], '/user/migrations/{migration_id}/archive');
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
     * @throws \Github\Exception\MigrationsGetArchiveForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsGetArchiveForAuthenticatedUserUnauthorizedException
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
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsGetArchiveForAuthenticatedUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\MigrationsGetArchiveForAuthenticatedUserUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}