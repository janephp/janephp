<?php

namespace PicturePark\API\Endpoint;

class ContentUpdatePermissions extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Updates the content permission sets of a single content. To get a list of available content permission sets, see [Permissions](operation/Permission_SearchContentPermissions)
     * @param string $id The content ID.
     * @param \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody
     * @param array{
     *    "resolveBehaviors"?: array, //List of enums that control which parts of the content are resolved and returned.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     */
    public function __construct(string $id, \PicturePark\API\Model\ContentPermissionsUpdateRequest $requestBody, array $queryParameters = [])
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
        return str_replace(['{id}'], [rawurlencode($this->id)], '/v1/Contents/{id}/permissions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentPermissionsUpdateRequest) {
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
        $optionsResolver->setDefined(['resolveBehaviors', 'timeout', 'waitSearchDocCreation']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['waitSearchDocCreation' => true]);
        $optionsResolver->addAllowedTypes('resolveBehaviors', ['array', 'null']);
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
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsConflictException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdatePermissionsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\API\Model\ContentDetail', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdatePermissionsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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