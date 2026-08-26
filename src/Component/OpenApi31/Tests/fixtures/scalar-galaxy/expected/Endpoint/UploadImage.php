<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Endpoint;

class UploadImage extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Endpoint
{
    protected $planetId;
    protected $accept;
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     */
    public function __construct(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody $requestBody = null, array $accept = [])
    {
        $this->planetId = $planetId;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{planetId}'], [$this->planetId], '/planets/{planetId}/image');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            $partOptions = ['image' => ['filename' => 'image']];
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                if (is_array($value) || $value instanceof \stdClass) {
                    $value = $serializer->serialize((array) $value, 'json');
                }
                $resourceOptions = $partOptions[$key] ?? [];
                if (isset($resourceOptions['filename'])) {
                    $uri = null;
                    if ($value instanceof \Psr\Http\Message\StreamInterface) {
                        $uri = $value->getMetadata('uri');
                    } elseif (is_resource($value)) {
                        $uri = stream_get_meta_data($value)['uri'] ?? null;
                    }
                    if (is_string($uri) && is_file($uri)) {
                        unset($resourceOptions['filename']);
                    }
                }
                $bodyBuilder->addResource($key, $value, $resourceOptions);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/xml']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\BadRequestError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\ForbiddenError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException($serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\Expected\Model\NotFoundError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth', 'basicAuth', 'apiKeyQuery', 'apiKeyHeader', 'apiKeyCookie', 'oAuth2', 'openIdConnect'];
    }
}