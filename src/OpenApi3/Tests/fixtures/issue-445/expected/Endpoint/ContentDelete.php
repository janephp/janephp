<?php

namespace PicturePark\API\Endpoint;

class ContentDelete extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Deletes a single content. The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the content and all files will be hard deleted.
    *
    * @param string $id The ID of the content to delete.
    * @param array $queryParameters {
    *     @var bool $forceReferenceRemoval A value indicating whether references to the content should be removed.
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/Contents/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('forceReferenceRemoval', 'timeout', 'waitSearchDocCreation'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('forceReferenceRemoval' => false, 'waitSearchDocCreation' => true));
        $optionsResolver->setAllowedTypes('forceReferenceRemoval', array('bool'));
        $optionsResolver->setAllowedTypes('timeout', array('string', 'null'));
        $optionsResolver->setAllowedTypes('waitSearchDocCreation', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentDeleteBadRequestException
     * @throws \PicturePark\API\Exception\ContentDeleteUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentDeleteNotFoundException
     * @throws \PicturePark\API\Exception\ContentDeleteMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentDeleteConflictException
     * @throws \PicturePark\API\Exception\ContentDeleteTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentDeleteInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentDeleteTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\ContentDeleteInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}