<?php

namespace Github\Endpoint;

class BillingGetSharedStorageBillingGhe extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $enterprise_id;
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the estimated paid and estimated total storage used for GitHub Actions and Github Packages.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    The authenticated user must be an enterprise admin.
    *
    * @param string $enterpriseId Unique identifier of the GitHub Enterprise Cloud instance.
    */
    public function __construct(string $enterpriseId)
    {
        $this->enterprise_id = $enterpriseId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{enterprise_id}'), array($this->enterprise_id), '/enterprises/{enterprise_id}/settings/billing/shared-storage');
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\CombinedBillingUsage', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}