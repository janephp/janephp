<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistriesRunGarbageCollection extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
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
     * `/v2/registries/$REGISTRY_NAME/garbage-collection`. This will initiate the
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
     */
    public function __construct(string $registryName)
    {
        $this->registry_name = $registryName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}'], [rawurlencode($this->registry_name)], '/v2/registries/{registry_name}/garbage-collection');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesRunGarbageCollectionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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