<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Endpoint;

class UploadDocument extends \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client\BaseEndpoint implements \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client\Endpoint
{
    /**
     * @param \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\DocumentUpload $requestBody
     */
    public function __construct(\Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\DocumentUpload $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/documents';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\DocumentUpload) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            $partOptions = ['file' => ['filename' => 'file', 'headers' => ['Content-Type' => 'application/pdf']], 'preview' => ['filename' => 'preview']];
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
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\Document
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Model\Document', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}