<?php

namespace PicturePark\API\Endpoint;

class XmpMappingGetMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Gets multiple xmp mapping details by the xmp mapping IDs. Can fetch maximum of 100 xmp mappings at once.
     * @param array{
     *    "ids"?: array, //Xmp mapping IDs to get information about.
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1/XmpMappings';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['ids']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('ids', ['array', 'null']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['ids' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\XmpMappingGetManyBadRequestException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyNotFoundException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyConflictException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\XmpMappingEntry[]
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\XmpMappingEntry[]', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\RequestSizeLimitExceededException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\XmpMappingGetManyInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['Bearer'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Lazy->value;
    }
}