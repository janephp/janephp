<?php

namespace PicturePark\API\Endpoint;

class SchemaUpdate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates an existing schema.
     * Depending on how much the schema is referenced by existing data, the operation can take a lot of time.
     * @param string $id The schema ID.
     * @param \PicturePark\API\Model\SchemaUpdateRequest $requestBody
     * @param array{
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     * } $queryParameters
     */
    public function __construct(string $id, \PicturePark\API\Model\SchemaUpdateRequest $requestBody, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/v1/Schemas/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\SchemaUpdateRequest) {
            return [['Content-Type' => ['application/json']], \PicturePark\API\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
        $optionsResolver->setDefined(['timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('timeout', ['string', 'null']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaUpdateBadRequestException
     * @throws \PicturePark\API\Exception\SchemaUpdateUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaUpdateNotFoundException
     * @throws \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaUpdateConflictException
     * @throws \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\SchemaUpdateResult
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\SchemaUpdateResult', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaUpdateTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\SchemaUpdateInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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