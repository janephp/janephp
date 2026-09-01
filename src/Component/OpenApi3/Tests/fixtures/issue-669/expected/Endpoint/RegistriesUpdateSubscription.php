<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class RegistriesUpdateSubscription extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * After creating your registry, you can switch to a different subscription tier to better suit your needs. To do this, send a POST request to `/v2/registries/subscription`. It is similar to POST `/v2/registry/subscription` and exists for backward compatibility.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody $requestBody
     */
    public function __construct(?\Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/registries/subscription';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\RegistriesUpdateSubscriptionInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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