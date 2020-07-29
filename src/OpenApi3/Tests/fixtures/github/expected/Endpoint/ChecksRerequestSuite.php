<?php

namespace Github\Endpoint;

class ChecksRerequestSuite extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $check_suite_id;
    /**
    * Triggers GitHub to rerequest an existing check suite, without pushing new code to a repository. This endpoint will trigger the [`check_suite` webhook](https://developer.github.com/webhooks/event-payloads/#check_suite) event with the action `rerequested`. When a check suite is `rerequested`, its `status` is reset to `queued` and the `conclusion` is cleared.
    
    To rerequest a check suite, your GitHub App must have the `checks:read` permission on a private repository or pull access to a public repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    */
    public function __construct(string $owner, string $repo, int $checkSuiteId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->check_suite_id = $checkSuiteId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{check_suite_id}'), array($this->owner, $this->repo, $this->check_suite_id), '/repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}