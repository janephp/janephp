<?php

namespace Github\Endpoint;

class ScimDeleteUserFromOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $scim_user_id;
    protected $accept;
    /**
     * 
     *
     * @param string $org 
     * @param string $scimUserId scim_user_id parameter
     * @param array $accept Accept content header application/json|application/scim+json
     */
    public function __construct(string $org, string $scimUserId, array $accept = array())
    {
        $this->org = $org;
        $this->scim_user_id = $scimUserId;
        $this->accept = $accept;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{scim_user_id}'), array($this->org, $this->scim_user_id), '/scim/v2/organizations/{org}/Users/{scim_user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'application/scim+json'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimDeleteUserFromOrgNotFoundException
     * @throws \Github\Exception\ScimDeleteUserFromOrgForbiddenException
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (204 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimDeleteUserFromOrgNotFoundException($serializer->deserialize((string) $body, 'Github\\Model\\ScimError', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimDeleteUserFromOrgForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\ScimError', 'json'), $response);
        }
        if (304 === $status) {
            return $body;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}