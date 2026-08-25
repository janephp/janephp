<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Endpoint;

class UploadFile extends \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Client\Endpoint
{
    /**
     * @param null|\Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody $requestBody
     */
    public function __construct(?\Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/file';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $value = is_bool($value) ? $value ? 'true' : 'false' : $value;
                if (is_array($value) || $value instanceof \stdClass) {
                    $value = $serializer->serialize((array) $value, 'json');
                }
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
     *
     * @return null|\Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi3\Tests\ExpectedIssue793\Model\FilePostResponse200', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}