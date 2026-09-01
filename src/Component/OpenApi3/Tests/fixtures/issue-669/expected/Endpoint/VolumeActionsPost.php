<?php

namespace Jane\Generated\DigitalOcean\Endpoint;

class VolumeActionsPost extends \Jane\Generated\DigitalOcean\Runtime\Client\BaseEndpoint implements \Jane\Generated\DigitalOcean\Runtime\Client\Endpoint
{
    /**
     * To initiate an action on a block storage volume by Name, send a POST request to
     * `~/v2/volumes/actions`. The body should contain the appropriate
     * attributes for the respective action.
     *
     * ## Attach a Block Storage Volume to a Droplet
     *
     * | Attribute   | Details                                                             |
     * | ----------- | ------------------------------------------------------------------- |
     * | type        | This must be `attach`                                               |
     * | volume_name | The name of the block storage volume                                |
     * | droplet_id  | Set to the Droplet's ID                                             |
     * | region      | Set to the slug representing the region where the volume is located |
     *
     * Each volume may only be attached to a single Droplet. However, up to fifteen
     * volumes may be attached to a Droplet at a time. Pre-formatted volumes will be
     * automatically mounted to Ubuntu, Debian, Fedora, Fedora Atomic, and CentOS
     * Droplets created on or after April 26, 2018 when attached. On older Droplets,
     * [additional configuration](https://docs.digitalocean.com/products/volumes/how-to/mount/)
     * is required.
     *
     * ## Remove a Block Storage Volume from a Droplet
     *
     * | Attribute   | Details                                                             |
     * | ----------- | ------------------------------------------------------------------- |
     * | type        | This must be `detach`                                               |
     * | volume_name | The name of the block storage volume                                |
     * | droplet_id  | Set to the Droplet's ID                                             |
     * | region      | Set to the slug representing the region where the volume is located |
     *
     * @param mixed $requestBody
     * @param array{
     *    "per_page"?: int, //Number of items returned per page
     *    "page"?: int, //Which 'page' of paginated results to return.
     * } $queryParameters
     */
    public function __construct($requestBody, array $queryParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\Generated\DigitalOcean\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v2/volumes/actions';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
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
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['per_page', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['per_page' => 20, 'page' => 1]);
        $optionsResolver->addAllowedTypes('per_page', ['int']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostUnauthorizedException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostNotFoundException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostTooManyRequestsException
     * @throws \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostInternalServerErrorException
     *
     * @return null|\Jane\Generated\DigitalOcean\Model\ResponseVolumeAction|\Jane\Generated\DigitalOcean\Model\Error
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (202 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\ResponseVolumeAction', 'json');
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostUnauthorizedException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostNotFoundException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (429 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostTooManyRequestsException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Generated\DigitalOcean\Exception\VolumeActionsPostInternalServerErrorException($serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json'), $response);
        }
        if (stripos(strtolower($contentType), 'application/json') !== false) {
            return $serializer->deserialize($body, 'Jane\Generated\DigitalOcean\Model\Error', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer_auth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}