<?php

namespace Github\Endpoint;

class ReposCompareCommits extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $base;
    protected $head;
    /**
    * Both `:base` and `:head` must be branch names in `:repo`. To compare branches across other repositories in the same network as `:repo`, use the format `<USERNAME>:branch`.
    
    The response from the API is equivalent to running the `git log base..head` command; however, commits are returned in chronological order. Pass the appropriate [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) to fetch diff and patch formats.
    
    The response also includes details on the files that were changed between the two commits. This includes the status of the change (for example, if a file was added, removed, modified, or renamed), and details of the change itself. For example, files with a `renamed` status have a `previous_filename` field showing the previous filename of the file, and files with a `modified` status have a `patch` field showing the changes made to the file.
    
    **Working with large comparisons**
    
    The response will include a comparison of up to 250 commits. If you are working with a larger commit range, you can use the [List commits](https://developer.github.com/v3/repos/commits/#list-commits) to enumerate all commits in the range.
    
    For comparisons with extremely large diffs, you may receive an error response indicating that the diff took too long to generate. You can typically resolve this error by using a smaller commit range.
    
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
    * @param string $base base parameter
    * @param string $head head parameter
    */
    public function __construct(string $owner, string $repo, string $base, string $head)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->base = $base;
        $this->head = $head;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{base}', '{head}'), array($this->owner, $this->repo, $this->base, $this->head), '/repos/{owner}/{repo}/compare/{base}...{head}');
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
     * @throws \Github\Exception\ReposCompareCommitsInternalServerErrorException
     * @throws \Github\Exception\ReposCompareCommitsNotFoundException
     *
     * @return null|\Github\Model\CommitComparison
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\CommitComparison', 'json');
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCompareCommitsInternalServerErrorException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposCompareCommitsNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}