<?php

namespace Github\Endpoint;

class ActionsCreateRegistrationTokenForOrg extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    
    Returns a token that you can pass to the `config` script. The token expires after one hour. You must authenticate
    using an access token with the `admin:org` scope to use this endpoint.
    
    #### Example using registration token
    
    Configure your self-hosted runner, replacing `TOKEN` with the registration token provided by this endpoint.
    
    ```
    ./config.sh --url https://github.com/octo-org --token TOKEN
    ```
    *
    * @param string $org 
    */
    public function __construct(string $org)
    {
        $this->org = $org;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/runners/registration-token');
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
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\AuthenticationToken', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}