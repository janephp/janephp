<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistriesListRepositoriesV2 extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    /**
     * To list all repositories in your container registry, send a GET request to `/v2/registries/$REGISTRY_NAME/repositoriesV2`. It is similar to GET `/v2/registry/$REGISTRY_NAME/repositoriesV2` and exists for backward compatibility.
     * @param string $registryName The name of a container registry.
     * @param array $queryParameters {
     *     @var int $per_page Number of items returned per page
     *     @var int $page Which 'page' of paginated results to return. Ignored when 'page_token' is provided.
     *     @var string $page_token Token to retrieve of the next or previous set of results more quickly than using 'page'.
     * }
     */
    public function __construct(string $registryName, array $queryParameters = [])
    {
        $this->registry_name = $registryName;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}'], [$this->registry_name], '/v2/registries/{registry_name}/repositoriesV2');
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
        $optionsResolver->setDefined(['per_page', 'page', 'page_token']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('page_token', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2BadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2UnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2NotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2TooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2InternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2BadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2UnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2NotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2TooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesListRepositoriesV2InternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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