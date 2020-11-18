<?php

namespace PicturePark\API\Endpoint;

class BusinessRuleUpdateConfiguration extends \PicturePark\API\Runtime\Client\BaseEndpoint implements \PicturePark\API\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody 
     */
    public function __construct(\PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \PicturePark\API\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/v1/BusinessRules/configuration';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \PicturePark\API\Model\BusinessRuleConfigurationUpdateRequest) {
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
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationBadRequestException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationUnauthorizedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationNotFoundException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationMethodNotAllowedException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationConflictException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationTooManyRequestsException
     * @throws \PicturePark\API\Exception\BusinessRuleUpdateConfigurationInternalServerErrorException
     *
     * @return null|\PicturePark\API\Model\BusinessProcess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'PicturePark\\API\\Model\\BusinessProcess', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationBadRequestException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkValidationException', 'json'));
        }
        if (401 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationUnauthorizedException();
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationNotFoundException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkNotFoundException', 'json'));
        }
        if (405 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationMethodNotAllowedException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationConflictException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkConflictException', 'json'));
        }
        if (429 === $status) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationTooManyRequestsException();
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \PicturePark\API\Exception\BusinessRuleUpdateConfigurationInternalServerErrorException($serializer->deserialize($body, 'PicturePark\\API\\Model\\PictureparkException', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('Bearer');
    }
}