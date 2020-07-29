<?php

namespace Github\Endpoint;

class InteractionsGetRestrictionsForOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $org;
    /**
     * Shows which group of GitHub users can interact with this organization and when the restriction expires. If there are no restrictions, you will see an empty response.
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
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}/interaction-limits');
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
     * @return null|\Github\Model\InteractionLimit
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\InteractionLimit', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}