<?php

namespace PicturePark\API\Endpoint;

class ListItemBatchUpdateFieldsByFilter extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Updates fields of multiple list items. A filter must be provided to limit the update to specific list items.
     * The same set of changes is applied to all the list items.
     * The operation is executed asynchronous and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     * @param \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody
     */
    public function __construct(\PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return '/v1/ListItems/batches/fields/filter';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\ListItemFieldsBatchUpdateFilterRequest) {
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
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterConflictException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\BusinessProcess', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemBatchUpdateFieldsByFilterInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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