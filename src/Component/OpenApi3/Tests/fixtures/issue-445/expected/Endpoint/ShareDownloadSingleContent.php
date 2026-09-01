<?php

namespace PicturePark\API\Endpoint;

class ShareDownloadSingleContent extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    protected $contentId;
    protected $outputFormatId;
    protected $accept;
    /**
     * Download single content in a specific output format (or automatically determined format if none is specified). To resize images on download specify target width &amp; height. To download only a portion of the file, specify the range parameter.
     * @param string $token Share token
     * @param string $contentId The content id
     * @param string $outputFormatId The output format id
     * @param array{
     *    "width"?: int, //Optional width in pixels to resize image
     *    "height"?: int, //Optional height in pixels to resize image
     * } $queryParameters
     * @param array{
     *    "range"?: string, //The range of bytes to download (http range header): bytes={from}-{to} (e.g. bytes=0-100000)
     * } $headerParameters
     * @param array $accept Accept content header application/json|application/octet-stream
     */
    public function __construct(string $token, string $contentId, string $outputFormatId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->token = $token;
        $this->contentId = $contentId;
        $this->outputFormatId = $outputFormatId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{token}', '{contentId}', '{outputFormatId}'], [rawurlencode($this->token), rawurlencode($this->contentId), rawurlencode($this->outputFormatId)], '/v1/Shares/d/{token}/{contentId}/{outputFormatId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/json', 'application/octet-stream']];
        }
        return $this->accept;
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['width', 'height']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('width', ['int', 'null']);
        $optionsResolver->addAllowedTypes('height', ['int', 'null']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['range']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('range', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentConflictException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException
     * @throws \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
        if (200 === $status) {
        }
        if (206 === $status) {
        }
        if (412 === $status) {
            throw new \PicturePark\API\Exception\ShareDownloadSingleContentPreconditionFailedException($response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}