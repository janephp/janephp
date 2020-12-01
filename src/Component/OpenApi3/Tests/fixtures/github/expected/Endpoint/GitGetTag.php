<?php

namespace Github\Endpoint;

class GitGetTag extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $tag_sha;
    /**
    * **Signature verification object**
    
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
    * @param string $tagSha tag_sha parameter
    */
    public function __construct(string $owner, string $repo, string $tagSha)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->tag_sha = $tagSha;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{tag_sha}'), array($this->owner, $this->repo, $this->tag_sha), '/repos/{owner}/{repo}/git/tags/{tag_sha}');
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
     * @throws \Github\Exception\GitGetTagNotFoundException
     *
     * @return null|\Github\Model\GitTag
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\GitTag', 'json');
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\GitGetTagNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}