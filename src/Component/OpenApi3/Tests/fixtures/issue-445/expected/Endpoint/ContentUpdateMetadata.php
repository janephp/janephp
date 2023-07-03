<?php

namespace PicturePark\API\Endpoint;

class ContentUpdateMetadata extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Updates metadata layers of a specified content. For file-less contents, the content itself can be updated as well.
    The update is flexible enough to allow the update of only the fields that are specified in the request (leaving untouched the other existing ones) or to allow
    the entire replacement of all the values of a schema or even of all the schemas.
    See [ShouldUpdateMetadata](https://github.com/Picturepark/Picturepark.SDK.DotNet/blob/master/src/Picturepark.SDK.V1.Tests/Clients/ContentTests.cs) tests.
    *
    * @param string $id The content ID.
    * @param \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    *     @var bool $allowMissingDependencies Allows storing references to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    */
    public function __construct(string $id, \PicturePark\API\Model\ContentMetadataUpdateRequest $requestBody, array $queryParameters = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/Contents/{id}/metadata');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentMetadataUpdateRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('resolveBehaviors', 'allowMissingDependencies', 'timeout', 'waitSearchDocCreation'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('allowMissingDependencies' => false, 'waitSearchDocCreation' => true));
        $optionsResolver->addAllowedTypes('resolveBehaviors', array('array', 'null'));
        $optionsResolver->addAllowedTypes('allowMissingDependencies', array('bool'));
        $optionsResolver->addAllowedTypes('timeout', array('string', 'null'));
        $optionsResolver->addAllowedTypes('waitSearchDocCreation', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataBadRequestException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataNotFoundException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataConflictException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentUpdateMetadataInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\ContentDetail
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\ContentDetail', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentUpdateMetadataInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}