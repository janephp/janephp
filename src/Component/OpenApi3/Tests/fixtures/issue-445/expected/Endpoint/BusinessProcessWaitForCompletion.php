<?php

namespace PicturePark\API\Endpoint;

class BusinessProcessWaitForCompletion extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Shortcut to wait for the business process to hit one of the finished life cycles.
    Finished life cycles are:
    - Succeeded
    - SucceededWithErrors
    - Cancelled
    - Failed
    *
    * @param string $id The business process id.
    * @param array $queryParameters {
    *     @var string $timeout The timeout to wait for completion.
    *     @var bool $waitForContinuationCompletion Waits for the completion of the continuation business process (if existing, recursively). Default to true.
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
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/BusinessProcesses/{id}/waitCompletion');
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
        $optionsResolver->setDefined(array('timeout', 'waitForContinuationCompletion'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('waitForContinuationCompletion' => true));
        $optionsResolver->addAllowedTypes('timeout', array('string', 'null'));
        $optionsResolver->addAllowedTypes('waitForContinuationCompletion', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForCompletionInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcessWaitForLifeCycleResult', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'), $response);
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionUnauthorizedException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'), $response);
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionMethodNotAllowedException($response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'), $response);
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionTooManyRequestsException($response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForCompletionInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}