<?php

namespace PicturePark\API\Endpoint;

class XmpMappingSearch extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * @param \PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody
     */
    public function __construct(\PicturePark\API\Model\XmpMappingEntrySearchRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/XmpMappings/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \PicturePark\API\Model\XmpMappingEntrySearchRequest) {
            return [['Content-Type' => ['application/json']], \PicturePark\API\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \PicturePark\API\Exception\XmpMappingSearchBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingSearchUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingSearchMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingSearchConflictException
     * @throws \PicturePark\API\Exception\XmpMappingSearchTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingSearchInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntrySearchResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\XmpMappingEntrySearchResult', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingSearchBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingSearchUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingSearchNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingSearchMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingSearchConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingSearchTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingSearchInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
}