<?php

namespace PicturePark\API\Endpoint;

class OutputResetRetryAttempts extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
    * Resets retry attempt counters on failed (optionally also completed) outputs and they will be subsequently picked up for re-rendering.
    The number the counters are reset to is determined by a global configuration value. If OutputIds are specified, the rest of the fields are ignored.
    Can reset 100 outputs at most. The operation is executed asynchronously and is not awaited. Call [WaitForCompletion](#operation/BusinessProcess_WaitForCompletion) to wait for the process to finish.
    *
    * @param \PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody 
    */
    public function __construct(\PicturePark\API\Model\OutputResetRetryAttemptsRequest $requestBody)
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
        return '/v1/Outputs/resetRetryAttempts';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\OutputResetRetryAttemptsRequest) {
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
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsBadRequestException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsUnauthorizedException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsNotFoundException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsMethodNotAllowedException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsConflictException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsTooManyRequestsException
     * @throws \PicturePark\API\Exception\OutputResetRetryAttemptsInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsUnauthorizedException();
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsMethodNotAllowedException();
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsTooManyRequestsException();
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\OutputResetRetryAttemptsInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}