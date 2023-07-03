<?php

namespace PicturePark\API\Endpoint;

class ContentTransferOwnership extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Transfers ownership of a content to another user. The target user must have the ManageContent UserRight.
    *
    * @param string $id The content ID.
    * @param \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    *     @var bool $waitSearchDocCreation Wait for the creation of the search document and the rendered display values.
               By default the endpoint waits for the search document creation. Passing false, the endpoint will return when the main entity has been created and the creation of the search document has been enqueued but not yet performed.
    * }
    */
    public function __construct(string $id, \PicturePark\API\Model\ContentOwnershipTransferRequest $requestBody, array $queryParameters = array())
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
        return str_replace(array('{id}'), array($this->id), '/v1/Contents/{id}/ownership');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ContentOwnershipTransferRequest) {
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
        $optionsResolver->setDefined(array('timeout', 'waitSearchDocCreation'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('waitSearchDocCreation' => true));
        $optionsResolver->addAllowedTypes('timeout', array('string', 'null'));
        $optionsResolver->addAllowedTypes('waitSearchDocCreation', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\ContentTransferOwnershipInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (200 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ContentTransferOwnershipInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}