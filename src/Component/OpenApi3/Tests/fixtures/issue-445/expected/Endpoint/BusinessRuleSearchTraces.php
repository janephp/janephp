<?php

namespace PicturePark\API\Endpoint;

class BusinessRuleSearchTraces extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * @param \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody
     */
    public function __construct(\PicturePark\API\Model\BusinessRuleTraceLogSearchRequest $requestBody)
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
        return '/v1/BusinessRules/traceLog/search';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\BusinessRuleTraceLogSearchRequest) {
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
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleSearchTracesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessRuleTraceLogSearchResult
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\BusinessRuleTraceLogSearchResult', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessRuleSearchTracesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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