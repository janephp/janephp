<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ProjectsAssignResources extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * To assign resources to a project, send a POST request to `/v2/projects/$PROJECT_ID/resources`.
     *
     * You must have both `project:update` and `<resource>:read` scopes to assign new resources. For example, to assign a Droplet to a project, include both the `project:update` and `droplet:read` scopes.
     *
     * @param string $projectId A unique identifier for a project.
     * @param \Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody
     */
    public function __construct(string $projectId, \Jane\Generated\DigitalOcean\Model\ProjectAssignment $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/v2/projects/{project_id}/resources');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ProjectAssignment) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (mb_strpos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}