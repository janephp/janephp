<?php

namespace PicturePark\API\Endpoint;

class ShareGetShareJson extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $token;
    /**
     * @param string $token Share token
     * @param array{
     *    "lang"?: string, //Language code
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the share are resolved and returned.
     * } $queryParameters
     */
    public function __construct(string $token, array $queryParameters = [])
    {
        $this->token = $token;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{token}'], [rawurlencode($this->token)], '/v1/Shares/json/{token}');
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
        $optionsResolver->setDefined(['lang', 'resolveBehaviors']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('lang', ['string', 'null']);
        $optionsResolver->addAllowedTypes('resolveBehaviors', ['array', 'null']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['resolveBehaviors' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ShareGetShareJsonBadRequestException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonUnauthorizedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonNotFoundException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonConflictException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonTooManyRequestsException
     * @throws \PicturePark\API\Exception\ShareGetShareJsonInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ShareDetail
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\ShareDetail', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ShareGetShareJsonInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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