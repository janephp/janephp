<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class FunctionsUpdateTrigger extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $namespace_id;
    protected $trigger_name;
    /**
     * Updates the details of the given trigger. To update a trigger, send a PUT request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers/$TRIGGER_NAME` with new values for the `is_enabled ` or `scheduled_details` properties.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $triggerName The name of the trigger to be managed.
     * @param \Jane\Generated\DigitalOcean\Model\UpdateTrigger $requestBody
     */
    public function __construct(string $namespaceId, string $triggerName, \Jane\Generated\DigitalOcean\Model\UpdateTrigger $requestBody)
    {
        $this->namespace_id = $namespaceId;
        $this->trigger_name = $triggerName;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{namespace_id}', '{trigger_name}'], [rawurlencode($this->namespace_id), rawurlencode($this->trigger_name)], '/v2/functions/namespaces/{namespace_id}/triggers/{trigger_name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\UpdateTrigger) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerBadRequestException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerBadRequestException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsUpdateTriggerInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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