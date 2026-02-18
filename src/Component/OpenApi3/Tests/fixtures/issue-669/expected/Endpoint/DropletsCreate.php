<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class DropletsCreate extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To create a new Droplet, send a POST request to `/v2/droplets` setting the
     * required attributes.
     *
     * A Droplet will be created using the provided information. The response body
     * will contain a JSON object with a key called `droplet`. The value will be an
     * object containing the standard attributes for your new Droplet. The response
     * code, 202 Accepted, does not indicate the success or failure of the operation,
     * just that the request has been accepted for processing. The `actions` returned
     * as part of the response's `links` object can be used to check the status
     * of the Droplet create event.
     *
     * ### Create Multiple Droplets
     *
     * Creating multiple Droplets is very similar to creating a single Droplet.
     * Instead of sending `name` as a string, send `names` as an array of strings. A
     * Droplet will be created for each name you send using the associated
     * information. Up to ten Droplets may be created this way at a time.
     *
     * Rather than returning a single Droplet, the response body will contain a JSON
     * array with a key called `droplets`. This will be set to an array of JSON
     * objects, each of which will contain the standard Droplet attributes. The
     * response code, 202 Accepted, does not indicate the success or failure of any
     * operation, just that the request has been accepted for processing. The array
     * of `actions` returned as part of the response's `links` object can be used to
     * check the status of each individual Droplet create event.
     *
     * @param null|mixed $requestBody
     */
    public function __construct($requestBody = null)
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
        return '/v2/droplets';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
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
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\DropletsCreateInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (202 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsCreateUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsCreateTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\DropletsCreateInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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