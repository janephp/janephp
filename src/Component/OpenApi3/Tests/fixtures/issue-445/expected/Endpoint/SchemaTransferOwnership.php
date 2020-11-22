<?php

namespace PicturePark\API\Endpoint;

class SchemaTransferOwnership extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Transfer ownership of the schema specified in 
    *
    * @param string $id The schema ID.
    * @param \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody 
    * @param array $queryParameters {
    *     @var string $timeout Maximum time to wait for the operation to complete. If timeout is exceeded, the operation is not aborted but continues anyhow.
               Only the waiting is aborted, and the calls returned.
    * }
    */
    public function __construct(string $id, \PicturePark\API\Model\SchemaOwnershipTransferRequest $requestBody, array $queryParameters = array())
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
        return str_replace(array('{id}'), array($this->id), '/v1/Schemas/{id}/ownership');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\SchemaOwnershipTransferRequest) {
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
        $optionsResolver->setDefined(array('timeout'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('timeout', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipBadRequestException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipUnauthorizedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipNotFoundException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipMethodNotAllowedException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipConflictException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipTooManyRequestsException
     * @throws \PicturePark\API\Exception\SchemaTransferOwnershipInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\SchemaTransferOwnershipInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}