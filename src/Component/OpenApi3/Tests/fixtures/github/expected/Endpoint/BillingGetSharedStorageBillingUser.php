<?php

namespace Github\Endpoint;

class BillingGetSharedStorageBillingUser extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $username;
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the estimated paid and estimated total storage used for GitHub Actions and Github Packages.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `user` scope.
    *
    * @param string $username 
    */
    public function __construct(string $username)
    {
        $this->username = $username;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{username}'), array($this->username), '/users/{username}/settings/billing/shared-storage');
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
     *
     * @return null|\Github\Model\CombinedBillingUsage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\CombinedBillingUsage', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}