<?php

namespace Github\Endpoint;

class PullsRemoveRequestedReviewers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $pullNumber, \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pull_number), '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\PullsRemoveRequestedReviewersUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\PullsRemoveRequestedReviewersUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}