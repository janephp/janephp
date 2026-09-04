<?php

namespace PicturePark\API\Endpoint;

class ListItemRestore extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Restores a previously deleted list item.
     * @param string $id The list item ID.
     * @param array{
     *    "allowMissingDependencies"?: bool, //Allows restoring list items that refer to list items or contents that don't exist in the system.
     *    "timeout"?: string, //Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
     *                        //            Only the waiting is aborted, and the calls returned.
     *    "waitSearchDocCreation"?: bool, //Wait for the creation of the search document and the rendered display values.
     *                                    //            By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
     * } $queryParameters
     */
    public function __construct(string $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/v1/ListItems/{id}/restore');
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
        $optionsResolver->setDefined(['allowMissingDependencies', 'timeout', 'waitSearchDocCreation']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['allowMissingDependencies' => false, 'waitSearchDocCreation' => true]);
        $optionsResolver->addAllowedTypes('allowMissingDependencies', ['bool']);
        $optionsResolver->addAllowedTypes('timeout', ['string', 'null']);
        $optionsResolver->addAllowedTypes('waitSearchDocCreation', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ListItemRestoreBadRequestException
     * @throws \PicturePark\API\Exception\ListItemRestoreUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemRestoreNotFoundException
     * @throws \PicturePark\API\Exception\ListItemRestoreMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemRestoreConflictException
     * @throws \PicturePark\API\Exception\ListItemRestoreTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemRestoreInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if (200 === $status) {
            return null;
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemRestoreBadRequestException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ListItemRestoreUnauthorizedException($response);
        }
        if ($contentType !== null && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemRestoreNotFoundException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ListItemRestoreMethodNotAllowedException($response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemRestoreConflictException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ListItemRestoreTooManyRequestsException($response);
        }
        if ($contentType !== null && (500 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemRestoreInternalServerErrorException($serializer->deserialize($body, 'PicturePark\API\Model\PictureparkException', 'json'), $response);
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