<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistriesGetDockerCredentials extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    /**
     * In order to access your container registry with the Docker client or from a
     * Kubernetes cluster, you will need to configure authentication. The necessary
     * JSON configuration can be retrieved by sending a GET request to
     * `/v2/registries/{registry_name}/docker-credentials`.
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
     * example: `/v2/registries/{registry_name}/docker-credentials?read_write=true`
     *
     * By default, the returned credentials will not expire. To retrieve credentials
     * with an expiry set, expiry_seconds may be provided as a query parameter. For
     * example: `/v2/registries/{registry_name}/docker-credentials?expiry_seconds=3600` will return
     * credentials that expire after one hour.
     *
     * @param string $registryName The name of a container registry.
     */
    public function __construct(string $registryName)
    {
        $this->registry_name = $registryName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}'], [rawurlencode($this->registry_name)], '/v2/registries/{registry_name}/docker-credentials');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\DockerCredentials|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\DockerCredentials', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesGetDockerCredentialsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}