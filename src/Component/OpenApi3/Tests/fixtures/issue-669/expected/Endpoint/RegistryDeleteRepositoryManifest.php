<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistryDeleteRepositoryManifest extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    protected $repository_name;
    protected $manifest_digest;
    /**
     * To delete a container repository manifest by digest, send a DELETE request to
     * `/v2/registry/$REGISTRY_NAME/repositories/$REPOSITORY_NAME/digests/$MANIFEST_DIGEST`.
     *
     * Note that if your repository name contains `/` characters, it must be
     * URL-encoded in the request URL. For example, to delete
     * `registry.digitalocean.com/example/my/repo@sha256:abcd`, the path would be
     * `/v2/registry/example/repositories/my%2Frepo/digests/sha256:abcd`.
     *
     * A successful request will receive a 204 status code with no body in response.
     * This indicates that the request was processed successfully.
     *
     * @param string $registryName The name of a container registry.
     * @param string $repositoryName The name of a container registry repository. If the name contains `/` characters, they must be URL-encoded, e.g. `%2F`.
     * @param string $manifestDigest The manifest digest of a container registry repository tag.
     */
    public function __construct(string $registryName, string $repositoryName, string $manifestDigest)
    {
        $this->registry_name = $registryName;
        $this->repository_name = $repositoryName;
        $this->manifest_digest = $manifestDigest;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}', '{repository_name}', '{manifest_digest}'], [rawurlencode($this->registry_name), rawurlencode($this->repository_name), rawurlencode($this->manifest_digest)], '/v2/registry/{registry_name}/repositories/{repository_name}/digests/{manifest_digest}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryDeleteRepositoryManifestInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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