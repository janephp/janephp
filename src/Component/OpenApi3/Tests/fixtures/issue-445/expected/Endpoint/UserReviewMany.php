<?php

namespace PicturePark\API\Endpoint;

class UserReviewMany extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * Users with AuthorizationState != ToBeReviewed are considered reviewed. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
     *
     * @param \PicturePark\API\Model\UserReviewManyRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\UserReviewManyRequest $requestBody)
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
        return '/v1/Users/many/review';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\UserReviewManyRequest) {
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
     * @throws \PicturePark\API\Exception\UserReviewManyBadRequestException
     * @throws \PicturePark\API\Exception\UserReviewManyUnauthorizedException
     * @throws \PicturePark\API\Exception\UserReviewManyNotFoundException
     * @throws \PicturePark\API\Exception\UserReviewManyMethodNotAllowedException
     * @throws \PicturePark\API\Exception\UserReviewManyConflictException
     * @throws \PicturePark\API\Exception\UserReviewManyTooManyRequestsException
     * @throws \PicturePark\API\Exception\UserReviewManyInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserReviewManyBadRequestException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\UserReviewManyUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserReviewManyNotFoundException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\UserReviewManyMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserReviewManyConflictException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\UserReviewManyTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\UserReviewManyInternalServerErrorException($serializer->deserialize((string) $body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}