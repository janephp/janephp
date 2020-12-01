<?php

namespace Github\Endpoint;

class GitCreateCommit extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    /**
    * Creates a new Git [commit object](https://git-scm.com/book/en/v1/Git-Internals-Git-Objects#Commit-Objects).
    
    In this example, the payload of the signature would be:
    
    
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param \Github\Model\ReposOwnerRepoGitCommitsPostBody $requestBody 
    */
    public function __construct(string $owner, string $repo, \Github\Model\ReposOwnerRepoGitCommitsPostBody $requestBody)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/git/commits');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoGitCommitsPostBody) {
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
     * @throws \Github\Exception\GitCreateCommitUnprocessableEntityException
     * @throws \Github\Exception\GitCreateCommitNotFoundException
     *
     * @return null|\Github\Model\GitCommit
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\GitCommit', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GitCreateCommitUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GitCreateCommitNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}