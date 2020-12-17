<?php

namespace Github\Endpoint;

class OrgsUpdate extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
    * **Parameter Deprecation Notice:** GitHub will replace and discontinue `members_allowed_repository_creation_type` in favor of more granular permissions. The new input parameters are `members_can_create_public_repositories`, `members_can_create_private_repositories` for all organizations and `members_can_create_internal_repositories` for organizations associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see the [blog post](https://developer.github.com/changes/2019-12-03-internal-visibility-changes).
    
    Enables an authenticated organization owner with the `admin:org` scope to update the organization's profile and member privileges.
    *
    * @param string $org 
    * @param null|\Github\Model\OrgsOrgPatchBody $requestBody 
    */
    public function __construct(string $org, ?\Github\Model\OrgsOrgPatchBody $requestBody = null)
    {
        $this->org = $org;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgPatchBody) {
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
     * @throws \Github\Exception\OrgsUpdateUnprocessableEntityException
     * @throws \Github\Exception\OrgsUpdateConflictException
     * @throws \Github\Exception\OrgsUpdateUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\OrganizationFull
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\OrganizationFull', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsUpdateUnprocessableEntityException();
        }
        if (409 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsUpdateConflictException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsUpdateUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}