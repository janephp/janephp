<?php

namespace PicturePark\API\Endpoint;

class BusinessProcessWaitForStates extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Wait for the business process to hit one of the given states.
     *
     * @param string $id The business process id.
     * @param array $queryParameters {
     *     @var array $states Business process states to wait for.
     *     @var string $timeout The timeout to wait for completion.
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
        return str_replace(array('{id}'), array($this->id), '/v1/BusinessProcesses/{id}/waitStates');
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
        $optionsResolver->setDefined(array('states', 'timeout'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('states', array('array', 'null'));
        $optionsResolver->setAllowedTypes('timeout', array('string', 'null'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesBadRequestException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesNotFoundException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesConflictException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessProcessWaitForStatesInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcessWaitForStateResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcessWaitForStateResult', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessProcessWaitForStatesInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}