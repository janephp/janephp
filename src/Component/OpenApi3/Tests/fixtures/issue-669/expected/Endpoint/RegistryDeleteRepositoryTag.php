<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistryDeleteRepositoryTag extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    protected $repository_name;
    protected $repository_tag;
    /**
     * To delete a container repository tag, send a DELETE request to
     * `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags/$TAG`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo:mytag`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags/mytag`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $repositoryTag The name of a container registry repository tag.
     */
    public function __construct(string $registryName, string $repositoryName, string $repositoryTag)
    {
        $this->registry_name = $registryName;
        $this->repository_name = $repositoryName;
        $this->repository_tag = $repositoryTag;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}', '{repository_name}', '{repository_tag}'], [rawurlencode($this->registry_name), rawurlencode($this->repository_name), rawurlencode($this->repository_tag)], '/v2/registry/{registry_name}/repositories/{repository_name}/tags/{repository_tag}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryTagInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
}