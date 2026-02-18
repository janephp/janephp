<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistryRunGarbageCollection extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    /**
     * Garbage collection enables users to clear out unreferenced blobs (layer &
     * manifest data) after deleting one or more manifests from a repository. If
     * there are no unreferenced blobs resulting from the deletion of one or more
     * manifests, garbage collection is effectively a noop.
     * [See here for more information](https://docs.digitalocean.com/products/container-registry/how-to/clean-up-container-registry/)
     * about how and why you should clean up your container registry periodically.
     *
     * To request a garbage collection run on your registry, send a POST request to
     * `/v2/registry/$REGISTRY_NAME/garbage-collection`. This will initiate the
     * following sequence of events on your registry.
     *
     * * Set the registry to read-only mode, meaning no further write-scoped
     *   JWTs will be issued to registry clients. Existing write-scoped JWTs will
     *   continue to work until they expire which can take up to 15 minutes.
     * * Wait until all existing write-scoped JWTs have expired.
     * * Scan all registry manifests to determine which blobs are unreferenced.
     * * Delete all unreferenced blobs from the registry.
     * * Record the number of blobs deleted and bytes freed, mark the garbage
     *   collection status as `success`.
     * * Remove the read-only mode restriction from the registry, meaning write-scoped
     *   JWTs will once again be issued to registry clients.
     *
     * @param string $registryName The name of a container registry.
     * @param null|\Jane\Generated\DigitalOcean\Model\RegistryRunGc $requestBody
     */
    public function __construct(string $registryName, ?\Jane\Generated\DigitalOcean\Model\RegistryRunGc $requestBody = null)
    {
        $this->registry_name = $registryName;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}'], [$this->registry_name], '/v2/registry/{registry_name}/garbage-collection');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\RegistryRunGc) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistryRunGarbageCollectionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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