<?php

namespace PicturePark\API\Endpoint;

class ContentCreate extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Create a single file-less content item. To import files, see [Transfer](#tag/Transfer).
    *
    * @param \PicturePark\API\Model\ContentCreateRequest $requestBody 
    * @param array $queryParameters {
    *     @var array $resolveBehaviors List of enums that control which parts of the content are resolved and returned.
    *     @var bool $allowMissingDependencies Allows creating contents that refer to list items or contents that don't exist in the system.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    */
    public function __construct(\PicturePark\API\Model\ContentCreateRequest $requestBody, array $queryParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/Contents';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentCreateRequest) {
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
     * @throws \PicturePark\API\Exception\ContentCreateBadRequestException
     * @throws \PicturePark\API\Exception\ContentCreateUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentCreateNotFoundException
     * @throws \PicturePark\API\Exception\ContentCreateMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentCreateConflictException
     * @throws \PicturePark\API\Exception\ContentCreateTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentCreateInternalServerErrorException
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
            throw new \PicturePark\API\Exception\ContentCreateBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentCreateUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentCreateNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentCreateMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentCreateConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentCreateTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentCreateInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}