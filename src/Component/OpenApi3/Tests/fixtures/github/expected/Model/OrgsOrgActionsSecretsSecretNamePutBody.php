<?php

namespace Github\Model;

class OrgsOrgActionsSecretsSecretNamePutBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://developer.github.com/v3/actions/secrets/#get-an-organization-public-key) endpoint.
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
    * Configures the access that repositories have to the organization secret. Can be one of:  
    \- `all` - All repositories in an organization can access the secret.  
    \- `private` - Private repositories in an organization can access the secret.  
    \- `selected` - Only specific repositories can access the secret.
    *
    * @var string
    */
    protected $visibility;
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @var list<string>
     */
    protected $selectedRepositoryIds;
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://developer.github.com/v3/actions/secrets/#get-an-organization-public-key) endpoint.
     *
     * @return string
     */
    public function getEncryptedValue() : string
    {
        return $this->encryptedValue;
    }
    /**
     * Value for your secret, encrypted with [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages) using the public key retrieved from the [Get an organization public key](https://developer.github.com/v3/actions/secrets/#get-an-organization-public-key) endpoint.
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
    /**
    * Configures the access that repositories have to the organization secret. Can be one of:  
    \- `all` - All repositories in an organization can access the secret.  
    \- `private` - Private repositories in an organization can access the secret.  
    \- `selected` - Only specific repositories can access the secret.
    *
    * @return string
    */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
    * Configures the access that repositories have to the organization secret. Can be one of:  
    \- `all` - All repositories in an organization can access the secret.  
    \- `private` - Private repositories in an organization can access the secret.  
    \- `selected` - Only specific repositories can access the secret.
    *
    * @param string $visibility
    *
    * @return self
    */
    public function setVisibility(string $visibility) : self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @return list<string>
     */
    public function getSelectedRepositoryIds() : array
    {
        return $this->selectedRepositoryIds;
    }
    /**
     * An array of repository ids that can access the organization secret. You can only provide a list of repository ids when the `visibility` is set to `selected`. You can manage the list of selected repositories using the [List selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#list-selected-repositories-for-an-organization-secret), [Set selected repositories for an organization secret](https://developer.github.com/v3/actions/secrets/#set-selected-repositories-for-an-organization-secret), and [Remove selected repository from an organization secret](https://developer.github.com/v3/actions/secrets/#remove-selected-repository-from-an-organization-secret) endpoints.
     *
     * @param list<string> $selectedRepositoryIds
     *
     * @return self
     */
    public function setSelectedRepositoryIds(array $selectedRepositoryIds) : self
    {
        $this->initialized['selectedRepositoryIds'] = true;
        $this->selectedRepositoryIds = $selectedRepositoryIds;
        return $this;
    }
}