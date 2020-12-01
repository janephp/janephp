<?php

namespace Github\Endpoint;

class PullsMerge extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $pull_number;
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param \Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody $requestBody 
     */
    public function __construct(string $owner, string $repo, int $pullNumber, \Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pullNumber;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{pull_number}'), array($this->owner, $this->repo, $this->pull_number), '/repos/{owner}/{repo}/pulls/{pull_number}/merge');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody) {
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
     * @throws \Github\Exception\PullsMergeMethodNotAllowedException
     * @throws \Github\Exception\PullsMergeConflictException
     * @throws \Github\Exception\PullsMergeUnprocessableEntityException
     * @throws \Github\Exception\PullsMergeForbiddenException
     * @throws \Github\Exception\PullsMergeNotFoundException
     *
     * @return null|\Github\Model\PullRequestMergeResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\PullRequestMergeResult', 'json');
        }
        if (is_null($contentType) === false && (405 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsMergeMethodNotAllowedException($serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoPullsPullNumberMergePutResponse405', 'json'));
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsMergeConflictException($serializer->deserialize($body, 'Github\\Model\\ReposOwnerRepoPullsPullNumberMergePutResponse409', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsMergeUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsMergeForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\PullsMergeNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}