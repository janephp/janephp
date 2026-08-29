<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistryGetDockerCredentials extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * In order to access your container registry with the Docker client or from a
     * Kubernetes cluster, you will need to configure authentication. The necessary
     * JSON configuration can be retrieved by sending a GET request to
     * `/v2/registry/docker-credentials`.
     *
     * The response will be in the format of a Docker `config.json` file. To use the
     * config in your Kubernetes cluster, create a Secret with:
     *
     *     kubectl create secret generic docr \
     *       --from-file=.dockerconfigjson=config.json \
     *       --type=kubernetes.io/dockerconfigjson
     * By default, the returned credentials have read-only access to your registry
     * and cannot be used to push images. This is appropriate for most Kubernetes
     * clusters. To retrieve read/write credentials, suitable for use with the Docker
     * client or in a CI system, read_write may be provided as query parameter. For
     * example: `/v2/registry/docker-credentials?read_write=true`
     *
     * By default, the returned credentials will not expire. To retrieve credentials
     * with an expiry set, expiry_seconds may be provided as a query parameter. For
     * example: `/v2/registry/docker-credentials?expiry_seconds=3600` will return
     * credentials that expire after one hour.
     *
     * @param array{
     *    "expiry_seconds"?: int, //The duration in seconds that the returned registry credentials will be valid. If not set or 0, the credentials will not expire.
     *    "read_write"?: bool, //By default, the registry credentials allow for read-only access. Set this query parameter to `true` to obtain read-write credentials.
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v2/registry/docker-credentials';
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
        $optionsResolver->setDefined(['expiry_seconds', 'read_write']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['expiry_seconds' => 0, 'read_write' => false]);
        $optionsResolver->addAllowedTypes('expiry_seconds', ['int']);
        $optionsResolver->addAllowedTypes('read_write', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\DockerCredentials|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\DockerCredentials', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryGetDockerCredentialsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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