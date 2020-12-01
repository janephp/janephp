<?php

namespace PicturePark\API\Endpoint;

class ListItemDeleteManyByFilter extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Deletes multiple list items. A filter must be provided to limit the deletion to specific list items.
    The lifecycle is changed to Inactive. After a customer instance specified time (default 30 days), the list item and all files will be hard deleted.
    The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody 
    */
    public function __construct(\PicturePark\API\Model\ListItemDeleteManyFilterRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/ListItems/many/delete/filter';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\ListItemDeleteManyFilterRequest) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterBadRequestException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterUnauthorizedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterNotFoundException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterMethodNotAllowedException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterConflictException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterTooManyRequestsException
     * @throws \PicturePark\API\Exception\ListItemDeleteManyByFilterInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\ListItemDeleteManyByFilterInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}