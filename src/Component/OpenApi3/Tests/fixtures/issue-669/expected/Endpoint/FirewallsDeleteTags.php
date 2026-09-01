<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class FirewallsDeleteTags extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $firewall_id;
    /**
     * To remove a tag representing a group of Droplets from a firewall, send a
     * DELETE request to `/v2/firewalls/$FIREWALL_ID/tags`. In the body of the
     * request, there should be a `tags` attribute containing a list of tag names.
     *
     * No response body will be sent back, but the response code will indicate
     * success. Specifically, the response code will be a 204, which means that the
     * action was successful with no returned body data.
     *
     * @param string $firewallId A unique ID that can be used to identify and reference a firewall.
     * @param null|\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody $requestBody
     */
    public function __construct(string $firewallId, ?\Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody $requestBody = null)
    {
        $this->firewall_id = $firewallId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{firewall_id}'], [rawurlencode($this->firewall_id)], '/v2/firewalls/{firewall_id}/tags');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsInternalServerErrorException
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
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsBadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FirewallsDeleteTagsInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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