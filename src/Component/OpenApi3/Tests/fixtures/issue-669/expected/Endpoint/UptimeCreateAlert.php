<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class UptimeCreateAlert extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $check_id;
    /**
     * To create an Uptime alert, send a POST request to `/v2/uptime/checks/$CHECK_ID/alerts` specifying the attributes
     * in the table below in the JSON body.
     *
     * @param string $checkId A unique identifier for a check.
     * @param \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody $requestBody
     */
    public function __construct(string $checkId, \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody $requestBody)
    {
        $this->check_id = $checkId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{check_id}'], [$this->check_id], '/v2/uptime/checks/{check_id}/alerts');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseExistingAlert|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseExistingAlert', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\UptimeCreateAlertInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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