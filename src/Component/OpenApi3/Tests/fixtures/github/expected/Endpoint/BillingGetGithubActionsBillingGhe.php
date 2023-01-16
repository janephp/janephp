<?php

namespace Github\Endpoint;

class BillingGetGithubActionsBillingGhe extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $enterprise_id;
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the summary of the free and paid GitHub Actions minutes used.
    
    Paid minutes only apply to workflows in private repositories that use GitHub-hosted runners. Minutes used is listed for each GitHub-hosted runner operating system. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
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
        return str_replace(array('{enterprise_id}'), array($this->enterprise_id), '/enterprises/{enterprise_id}/settings/billing/actions');
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
     * @return null|\Github\Model\ActionsBillingUsage
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ActionsBillingUsage', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}