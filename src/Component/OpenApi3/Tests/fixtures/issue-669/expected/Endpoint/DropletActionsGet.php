<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletActionsGet extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $droplet_id;
    protected $action_id;
    /**
     * To retrieve a Droplet action, send a GET request to
     * `/v2/droplets/$DROPLET_ID/actions/$ACTION_ID`.
     *
     * The response will be a JSON object with a key called `action`. The value will
     * be a Droplet action object.
     *
     * @param int $dropletId A unique identifier for a Droplet instance.
     * @param int $actionId A unique numeric ID that can be used to identify and reference an action.
     */
    public function __construct(int $dropletId, int $actionId)
    {
        $this->droplet_id = $dropletId;
        $this->action_id = $actionId;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{droplet_id}', '{action_id}'], [rawurlencode($this->droplet_id), rawurlencode($this->action_id)], '/v2/droplets/{droplet_id}/actions/{action_id}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletActionsGetInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseAction|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseAction', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletActionsGetUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletActionsGetNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletActionsGetTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletActionsGetInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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