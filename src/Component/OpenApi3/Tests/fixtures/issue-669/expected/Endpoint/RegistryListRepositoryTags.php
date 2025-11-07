<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistryListRepositoryTags extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    protected $repository_name;
    /**
     * To list all tags in your container registry repository, send a GET
     * request to `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/tags`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to list tags for
     * `registry.digitalocean.com/example/my/repo`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/tags`.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param array $queryParameters {
     *     @var int $per_page Number of items returned per page
     *     @var int $page Which 'page' of paginated results to return.
     * }
     */
    public function __construct(string $registryName, string $repositoryName, array $queryParameters = [])
    {
        $this->registry_name = $registryName;
        $this->repository_name = $repositoryName;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}', '{repository_name}'], [$this->registry_name, $this->repository_name], '/v2/registry/{registry_name}/repositories/{repository_name}/tags');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryListRepositoryTagsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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