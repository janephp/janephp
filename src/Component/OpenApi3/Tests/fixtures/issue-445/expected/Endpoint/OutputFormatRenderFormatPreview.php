<?php

namespace PicturePark\API\Endpoint;

class OutputFormatRenderFormatPreview extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Request rendering of the given OutputFormat for a given content.
     * @param \PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody
     * @param array $accept Accept content header application/octet-stream|application/json
     */
    public function __construct(\PicturePark\API\Model\OutputFormatRenderPreviewRequest $requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/OutputFormats/preview';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\OutputFormatRenderPreviewRequest) {
            return [['Content-Type' => ['application/json']], \PicturePark\API\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/octet-stream', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException
     * @throws \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\OutputFormatRenderFormatPreviewPreconditionFailedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
}