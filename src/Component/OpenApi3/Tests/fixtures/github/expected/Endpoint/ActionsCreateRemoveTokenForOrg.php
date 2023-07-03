<?php

namespace Github\Endpoint;

class ActionsCreateRemoveTokenForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    
    Returns a token that you can pass to the `config` script to remove a self-hosted runner from an organization. The
    token expires after one hour. You must authenticate using an access token with the `admin:org` scope to use this
    endpoint.
    
    #### Example using remove token
    
    To remove your self-hosted runner from an organization, replace `TOKEN` with the remove token provided by this
    endpoint.
    
    ```
    ./config.sh remove --token TOKEN
    ```
    *
    * @param string $org 
    */
    public function __construct(string $org)
    {
        $this->org = $org;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/runners/remove-token');
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
     * @return null|\Github\Model\AuthenticationToken
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\AuthenticationToken', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}