<?php

namespace Github\Endpoint;

class ReposTestPushWebhook extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $hook_id;
    /**
     * This will trigger the hook with the latest push to the current repository if the hook is subscribed to `push` events. If the hook is not subscribed to `push` events, the server will respond with 204 but no test POST will be generated.
     **Note**: Previously `/repos/:owner/:repo/hooks/:hook_id/test`
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     */
    public function __construct(string $owner, string $repo, int $hookId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hook_id = $hookId;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{hook_id}'), array($this->owner, $this->repo, $this->hook_id), '/repos/{owner}/{repo}/hooks/{hook_id}/tests');
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
     * @throws \Github\Exception\ReposTestPushWebhookNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposTestPushWebhookNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}