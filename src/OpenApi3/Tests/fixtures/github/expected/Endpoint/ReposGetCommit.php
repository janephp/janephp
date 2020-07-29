<?php

namespace Github\Endpoint;

class ReposGetCommit extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $owner;
    protected $repo;
    protected $ref;
    /**
    * Returns the contents of a single commit reference. You must have `read` access for the repository to use this endpoint.
    
    You can pass the appropriate [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) to fetch `diff` and `patch` formats. Diffs with binary data will have no `patch` property.
    
    To return only the SHA-1 hash of the commit reference, you can provide the `sha` custom [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) in the `Accept` header. You can use this endpoint to check if a remote reference's SHA-1 hash is the same as your local reference's SHA-1 hash by providing the local SHA-1 reference as the ETag.
    
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
    * @param string $ref ref+ parameter
    */
    public function __construct(string $owner, string $repo, string $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/commits/{ref}');
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
     * @throws \Github\Exception\ReposGetCommitUnprocessableEntityException
     * @throws \Github\Exception\ReposGetCommitNotFoundException
     * @throws \Github\Exception\ReposGetCommitInternalServerErrorException
     *
     * @return null|\Github\Model\Commit
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Commit', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetCommitUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetCommitNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ReposGetCommitInternalServerErrorException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}