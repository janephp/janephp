<?php

namespace Github\Endpoint;

class ActionsCreateOrUpdateRepoSecret extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $secret_name;
    /**
    * Creates or updates a repository secret with an encrypted value. Encrypt your secret using
    [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages). You must authenticate using an access
    token with the `repo` scope to use this endpoint. GitHub Apps must have the `secrets` repository permission to use
    this endpoint.
    
    #### Example encrypting a secret using Node.js
    
    Encrypt your secret using the [tweetsodium](https://github.com/github/tweetsodium) library.
    
    ```
    const sodium = require('tweetsodium');
    
    const key = "base64-encoded-public-key";
    const value = "plain-text-secret";
    
    // Convert the message and key to Uint8Array's (Buffer implements that interface)
    const messageBytes = Buffer.from(value);
    const keyBytes = Buffer.from(key, 'base64');
    
    // Encrypt using LibSodium.
    const encryptedBytes = sodium.seal(messageBytes, keyBytes);
    
    // Base64 the encrypted secret
    const encrypted = Buffer.from(encryptedBytes).toString('base64');
    
    console.log(encrypted);
    ```
    
    
    #### Example encrypting a secret using Python
    
    Encrypt your secret using [pynacl](https://pynacl.readthedocs.io/en/stable/public/#nacl-public-sealedbox) with Python 3.
    
    ```
    from base64 import b64encode
    from nacl import encoding, public
    
    def encrypt(public_key: str, secret_value: str) -> str:
     """Encrypt a Unicode string using the public key."""
     public_key = public.PublicKey(public_key.encode("utf-8"), encoding.Base64Encoder())
     sealed_box = public.SealedBox(public_key)
     encrypted = sealed_box.encrypt(secret_value.encode("utf-8"))
     return b64encode(encrypted).decode("utf-8")
    ```
    
    #### Example encrypting a secret using C#
    
    Encrypt your secret using the [Sodium.Core](https://www.nuget.org/packages/Sodium.Core/) package.
    
    ```
    var secretValue = System.Text.Encoding.UTF8.GetBytes("mySecret");
    var publicKey = Convert.FromBase64String("2Sg8iYjAxxmI2LvUXpJjkYrMxURPc8r+dB7TJyvvcCU=");
    
    var sealedPublicKeyBox = Sodium.SealedPublicKeyBox.Create(secretValue, publicKey);
    
    Console.WriteLine(Convert.ToBase64String(sealedPublicKeyBox));
    ```
    
    #### Example encrypting a secret using Ruby
    
    Encrypt your secret using the [rbnacl](https://github.com/RubyCrypto/rbnacl) gem.
    
    ```ruby
    require "rbnacl"
    require "base64"
    
    key = Base64.decode64("+ZYvJDZMHUfBkJdyq5Zm9SKqeuBQ4sj+6sfjlH4CgG0=")
    public_key = RbNaCl::PublicKey.new(key)
    
    box = RbNaCl::Boxes::Sealed.from_public_key(public_key)
    encrypted_secret = box.encrypt("my_secret")
    
    # Print the base64 encoded secret
    puts Base64.strict_encode64(encrypted_secret)
    ```
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $secretName secret_name parameter
    * @param null|\Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody $requestBody 
    */
    public function __construct(string $owner, string $repo, string $secretName, ?\Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody $requestBody = null)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->secret_name = $secretName;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{owner}', '{repo}', '{secret_name}'), array($this->owner, $this->repo, $this->secret_name), '/repos/{owner}/{repo}/actions/secrets/{secret_name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (201 === $status) {
            return $body;
        }
        if (204 === $status) {
            return $body;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}