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
        return str_replace(['{project_id}'], [rawurlencode($this->project_id)], '/v2/projects/{project_id}/resources');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\ProjectAssignment) {
            return [['Content-Type' => ['application/json']], \Jane\Generated\DigitalOcean\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ProjectsAssignResourcesInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}