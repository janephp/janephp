<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsDestroyWithAssociatedResourcesSelective extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    /**
     * To destroy a Droplet along with a sub-set of its associated resources, send a
     * DELETE request to the `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/selective`
     * endpoint. The JSON body of the request should include `reserved_ips`, `snapshots`, `volumes`,
     * or `volume_snapshots` keys each set to an array of IDs for the associated
     * resources to be destroyed. The IDs can be found by querying the Droplet's
     * associated resources. Any associated resource not included in the request
     * will remain and continue to accrue changes on your account.
     *
     * A successful response will include a 202 response code and no content. Use
     * the status endpoint to check on the success or failure of the destruction of
     * the individual resources.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param null|\Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource $requestBody
     */
    public function __construct(int $dropletId, ?\Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource $requestBody = null)
    {
        $this->droplet_id = $dropletId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{droplet_id}'], [$this->droplet_id], '/v2/droplets/{droplet_id}/destroy_with_associated_resources/selective');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesSelectiveInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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