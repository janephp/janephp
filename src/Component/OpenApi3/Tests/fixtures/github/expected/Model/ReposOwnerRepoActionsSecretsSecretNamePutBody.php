<?php

namespace Github\Model;

class ReposOwnerRepoActionsSecretsSecretNamePutBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://developer.github.com/v3/actions/secrets/#get-a-repository-public-key) endpoint.
     *
     * @var string
     */
    protected $encryptedValue;
    /**
     * ID of the key you used to encrypt the secret.
     *
     * @var string
     */
    protected $keyId;
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://developer.github.com/v3/actions/secrets/#get-a-repository-public-key) endpoint.
     *
     * @return string
     */
    public function getEncryptedValue() : string
    {
        return $this->encryptedValue;
    }
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get a repository public key](https://developer.github.com/v3/actions/secrets/#get-a-repository-public-key) endpoint.
     *
     * @param string $encryptedValue
     *
     * @return self
     */
    public function setEncryptedValue(string $encryptedValue) : self
    {
        $this->initialized['encryptedValue'] = true;
        $this->encryptedValue = $encryptedValue;
        return $this;
    }
    /**
     * ID of the key you used to encrypt the secret.
     *
     * @return string
     */
    public function getKeyId() : string
    {
        return $this->keyId;
    }
    /**
     * ID of the key you used to encrypt the secret.
     *
     * @param string $keyId
     *
     * @return self
     */
    public function setKeyId(string $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
}