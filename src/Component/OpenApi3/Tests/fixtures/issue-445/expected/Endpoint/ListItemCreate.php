<?php

namespace PicturePark\API\Endpoint;

class ListItemCreate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Create a new list item.
    * @param \PicturePark\API\Model\ListItemCreateRequest $requestBody
    * @param array{
    *    "resolveBehaviors"?: array, //List of enums that control which parts of the list item are resolved and returned.
    *    "allowMissingDependencies"?: bool, //Allows creating list items that refer to list items or contents that don't exist in the system.
    *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * } $queryParameters
    */
    public function __construct(\PicturePark\API\Model\ListItemCreateRequest $requestBody, array $queryParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1/ListItems';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\ListItemCreateRequest) {
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
        $optionsResolver->setDefined(['resolveBehaviors', 'allowMissingDependencies', 'timeout', 'waitSearchDocCreation']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['allowMissingDependencies' => false, 'waitSearchDocCreation' => true]);
        $optionsResolver->addAllowedTypes('resolveBehaviors', ['array', 'null']);
        $optionsResolver->addAllowedTypes('allowMissingDependencies', ['bool']);
        $optionsResolver->addAllowedTypes('timeout', ['string', 'null']);
        $optionsResolver->addAllowedTypes('waitSearchDocCreation', ['bool']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['resolveBehaviors' => ['style' => 'form', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ListItemCreateBadRequestException
     * @throws \PicturePark\API\Exception\ListItemCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemCreateNotFoundException
     * @throws \PicturePark\API\Exception\ListItemCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemCreateConflictException
     * @throws \PicturePark\API\Exception\ListItemCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemCreateInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ListItemDetail
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\ListItemDetail', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemCreateBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ListItemCreateUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemCreateNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ListItemCreateMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemCreateConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ListItemCreateTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemCreateInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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