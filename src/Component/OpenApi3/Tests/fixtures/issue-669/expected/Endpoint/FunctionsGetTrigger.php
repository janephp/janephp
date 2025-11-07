<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class FunctionsGetTrigger extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $namespace_id;
    protected $trigger_name;
    /**
     * Gets the trigger details. To get the trigger details, send a GET request to `/v2/functions/namespaces/$NAMESPACE_ID/triggers/$TRIGGER_NAME`.
     * @param string $namespaceId The ID of the namespace to be managed.
     * @param string $triggerName The name of the trigger to be managed.
     */
    public function __construct(string $namespaceId, string $triggerName)
    {
        $this->namespace_id = $namespaceId;
        $this->trigger_name = $triggerName;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{namespace_id}', '{trigger_name}'], [$this->namespace_id, $this->trigger_name], '/v2/functions/namespaces/{namespace_id}/triggers/{trigger_name}');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\FunctionsGetTriggerInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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