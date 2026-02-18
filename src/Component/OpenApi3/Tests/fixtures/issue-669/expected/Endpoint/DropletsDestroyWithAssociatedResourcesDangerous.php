<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsDestroyWithAssociatedResourcesDangerous extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    /**
     * To destroy a Droplet along with all of its associated resources, send a DELETE
     * request to the `/v2/droplets/$DROPLET_ID/destroy_with_associated_resources/dangerous`
     * endpoint. The headers of this request must include an `X-Dangerous` key set to
     * `true`. To preview which resources will be destroyed, first query the
     * Droplet's associated resources. This operation _can not_ be reverse and should
     * be used with caution.
     *
     * A successful response will include a 202 response code and no content. Use the
     * status endpoint to check on the success or failure of the destruction of the
     * individual resources.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param array{
     *    "X-Dangerous": bool, //Acknowledge this action will destroy the Droplet and all associated resources and _can not_ be reversed.
     * } $headerParameters
     */
    public function __construct(int $dropletId, array $headerParameters = [])
    {
        $this->droplet_id = $dropletId;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{droplet_id}'], [$this->droplet_id], '/v2/droplets/{droplet_id}/destroy_with_associated_resources/dangerous');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Dangerous']);
        $optionsResolver->setRequired(['X-Dangerous']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Dangerous', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousInternalServerErrorException
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
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsDestroyWithAssociatedResourcesDangerousInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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