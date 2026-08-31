<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class ImageActionsPost extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    protected $image_id;
    /**
     * The following actions are available on an Image.
     *
     * ## Convert an Image to a Snapshot
     *
     * To convert an image, for example, a backup to a snapshot, send a POST request
     * to `/v2/images/$IMAGE_ID/actions`. Set the `type` attribute to `convert`.
     *
     * ## Transfer an Image
     *
     * To transfer an image to another region, send a POST request to
     * `/v2/images/$IMAGE_ID/actions`. Set the `type` attribute to `transfer` and set
     * `region` attribute to the slug identifier of the region you wish to transfer
     * to.
     *
     * @param int $imageId A unique number that can be used to identify and reference a specific image.
     * @param null|mixed $requestBody
     */
    public function __construct(int $imageId, $requestBody = null)
    {
        $this->image_id = $imageId;
        $this->body = $requestBody;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{image_id}'], [rawurlencode($this->image_id)], '/v2/images/{image_id}/actions');
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
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\ImageActionsPostInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\Action|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (201 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Action', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ImageActionsPostUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ImageActionsPostNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ImageActionsPostTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\ImageActionsPostInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
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