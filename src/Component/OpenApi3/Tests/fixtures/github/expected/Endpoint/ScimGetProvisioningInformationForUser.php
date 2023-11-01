<?php

namespace Github\Endpoint;

class ScimGetProvisioningInformationForUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $scim_user_id;
    protected $accept;
    /**
     * 
     *
     * @param string $org 
     * @param string $scimUserId scim_user_id parameter
     * @param array $accept Accept content header application/scim+json|application/json
     */
    public function __construct(string $org, string $scimUserId, array $accept = [])
    {
        $this->org = $org;
        $this->scim_user_id = $scimUserId;
        $this->accept = $accept;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{org}', '{scim_user_id}'], [$this->org, $this->scim_user_id], '/scim/v2/organizations/{org}/Users/{scim_user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/scim+json', 'application/json']];
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserNotFoundException
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimGetProvisioningInformationForUserNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimGetProvisioningInformationForUserForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'), $response);
        }
        if (304 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}