<?php

namespace PicturePark\API\Endpoint;

class BusinessProcessUpdateNotification extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Only available for business processes created through BusinessProcessCreateRequest).
     *
     * @param string $id The business process id.
     * @param \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody 
     */
    public function __construct(string $id, \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest $requestBody)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/BusinessProcesses/{id}/notification');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\BusinessProcessNotificationUpdateRequest) {
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
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessUpdateNotificationInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessUpdateNotificationInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}