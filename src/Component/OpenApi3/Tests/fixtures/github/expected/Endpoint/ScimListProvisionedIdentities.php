<?php

namespace Github\Endpoint;

class ScimListProvisionedIdentities extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
    * Retrieves a paginated list of all provisioned organization members, including pending invitations. If you provide the `filter` parameter, the resources for all matching provisions members are returned.
    
    When a user with a SAML-provisioned external identity leaves (or is removed from) an organization, the account's metadata is immediately removed. However, the returned list of user accounts might not always match the organization or enterprise member list you see on GitHub. This can happen in certain cases where an external identity associated with an organization will not match an organization member:
     - When a user with a SCIM-provisioned external identity is removed from an organization, the account's metadata is preserved to allow the user to re-join the organization in the future.
     - When inviting a user to join an organization, you can expect to see their external identity in the results before they accept the invitation, or if the invitation is cancelled (or never accepted).
     - When a user is invited over SCIM, an external identity is created that matches with the invitee's email address. However, this identity is only linked to a user account when the user accepts the invitation by going through SAML SSO.
    
    The returned list of external identities can include an entry for a `null` user. These are unlinked SAML identities that are created when a user goes through the following Single Sign-On (SSO) process but does not sign in to their GitHub account after completing SSO:
    
    1. The user is granted access by the IdP and is not a member of the GitHub organization.
    
    1. The user attempts to access the GitHub organization and initiates the SAML SSO process, and is not currently signed in to their GitHub account.
    
    1. After successfully authenticating with the SAML SSO IdP, the `null` external identity entry is created and the user is prompted to sign in to their GitHub account:
      - If the user signs in, their GitHub account is linked to this entry.
      - If the user does not sign in (or does not create a new account when prompted), they are not added to the GitHub organization, and the external identity `null` entry remains in place.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var int $startIndex Used for pagination: the index of the first result to return.
    *     @var int $count Used for pagination: the number of results to return.
    *     @var string $filter Filters results using the equals query parameter operator (`eq`). You can filter results that are equal to `id`, `userName`, `emails`, and `external_id`. For example, to search for an identity with the `userName` Octocat, you would use this query:
    
    `?filter=userName%20eq%20\"Octocat\"`.
    
    To filter results for for the identity with the email `octocat@github.com`, you would use this query:
    
    `?filter=emails%20eq%20\"octocat@github.com\"`.
    * }
    */
    public function __construct(string $org, array $queryParameters = array())
    {
        $this->org = $org;
        $this->queryParameters = $queryParameters;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/scim/v2/organizations/{org}/Users');
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
        $optionsResolver->setDefined(array('startIndex', 'count', 'filter'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('startIndex', array('int'));
        $optionsResolver->addAllowedTypes('count', array('int'));
        $optionsResolver->addAllowedTypes('filter', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ScimListProvisionedIdentitiesNotFoundException
     * @throws \Github\Exception\ScimListProvisionedIdentitiesForbiddenException
     * @throws \Github\Exception\ScimListProvisionedIdentitiesBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimListProvisionedIdentitiesNotFoundException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimListProvisionedIdentitiesForbiddenException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ScimListProvisionedIdentitiesBadRequestException($serializer->deserialize($body, 'Github\\Model\\ScimError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}