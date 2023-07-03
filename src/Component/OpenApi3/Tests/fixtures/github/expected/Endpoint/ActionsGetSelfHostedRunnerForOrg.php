<?php

namespace Github\Endpoint;

class ActionsGetSelfHostedRunnerForOrg extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $org;
    protected $runner_id;
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    Gets a specific self-hosted runner for an organization. You must authenticate using an access token with the `admin:org` scope to use this endpoint.
    *
    * @param string $org 
    * @param int $runnerId runner_id parameter
    */
    public function __construct(string $org, int $runnerId)
    {
        $this->org = $org;
        $this->runner_id = $runnerId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{runner_id}'), array($this->org, $this->runner_id), '/orgs/{org}/actions/runners/{runner_id}');
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
     * @return null|\Github\Model\Runner
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\Runner', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}