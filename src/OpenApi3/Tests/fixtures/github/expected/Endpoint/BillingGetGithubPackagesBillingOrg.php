<?php

namespace Github\Endpoint;

class BillingGetGithubPackagesBillingOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the free and paid storage usued for GitHub Packages in gigabytes.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `read:org` scope.
    *
    * @param string $org 
    */
    public function __construct(string $org)
    {
        $this->org = $org;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}/settings/billing/packages');
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
     * @return null|\Github\Model\PackagesBillingUsage
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\PackagesBillingUsage', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}