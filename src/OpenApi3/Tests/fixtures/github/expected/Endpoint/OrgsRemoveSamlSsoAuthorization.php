<?php

namespace Github\Endpoint;

class OrgsRemoveSamlSsoAuthorization extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $credential_id;
    /**
    * Listing and deleting credential authorizations is available to organizations with GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products).
    
    An authenticated organization owner with the `admin:org` scope can remove a credential authorization for an organization that uses SAML SSO. Once you remove someone's credential authorization, they will need to create a new personal access token or SSH key and authorize it for the organization they want to access.
    *
    * @param string $org 
    * @param int $credentialId credential_id parameter
    */
    public function __construct(string $org, int $credentialId)
    {
        $this->org = $org;
        $this->credential_id = $credentialId;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{credential_id}'), array($this->org, $this->credential_id), '/orgs/{org}/credential-authorizations/{credential_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsRemoveSamlSsoAuthorizationNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsRemoveSamlSsoAuthorizationNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}