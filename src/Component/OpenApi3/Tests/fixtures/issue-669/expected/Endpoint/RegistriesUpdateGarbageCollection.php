<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistriesUpdateGarbageCollection extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $registry_name;
    protected $garbage_collection_uuid;
    /**
     * To cancel the currently-active garbage collection for a registry, send a PUT request to `/v2/registries/$REGISTRY_NAME/garbage-collection/$GC_UUID` and specify one or more of the attributes below. It is similar to PUT `/v2/registries/$REGISTRY_NAME/garbage-collection/$GC_UUID` and exists for backward compatibility.
     * @param string $registryName The name of a container registry.
     * @param string $garbageCollectionUuid The UUID of a garbage collection run.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody
     */
    public function __construct(string $registryName, string $garbageCollectionUuid, \Jane\Generated\DigitalOcean\Model\UpdateRegistry $requestBody)
    {
        $this->registry_name = $registryName;
        $this->garbage_collection_uuid = $garbageCollectionUuid;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{registry_name}', '{garbage_collection_uuid}'], [$this->registry_name, $this->garbage_collection_uuid], '/v2/registries/{registry_name}/garbage-collection/{garbage_collection_uuid}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\UpdateRegistry) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateGarbageCollectionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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