<?php

namespace Github\Endpoint;

class CodeScanningGetAlert extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $alert_id;
    /**
    * Gets a single code scanning alert. You must use an access token with the `security_events` scope to use this endpoint. GitHub Apps must have the `security_events` read permission to use this endpoint.
    
    The security `alert_id` is found at the end of the security alert's URL. For example, the security alert ID for `https://github.com/Octo-org/octo-repo/security/code-scanning/88` is `88`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $alertId alert_id parameter
    */
    public function __construct(string $owner, string $repo, int $alertId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->alert_id = $alertId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{alert_id}'), array($this->owner, $this->repo, $this->alert_id), '/repos/{owner}/{repo}/code-scanning/alerts/{alert_id}');
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
     * @throws \Github\Exception\CodeScanningGetAlertNotFoundException
     * @throws \Github\Exception\CodeScanningGetAlertServiceUnavailableException
     *
     * @return null|\Github\Model\CodeScanningAlert
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\CodeScanningAlert', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\CodeScanningGetAlertNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (503 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\CodeScanningGetAlertServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ResponseServiceUnavailable', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}