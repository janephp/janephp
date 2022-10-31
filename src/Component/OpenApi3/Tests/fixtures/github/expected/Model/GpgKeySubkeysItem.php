<?php

namespace Github\Model;

class GpgKeySubkeysItem extends \ArrayObject
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
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $primaryKeyId;
    /**
     * 
     *
     * @var string
     */
    protected $keyId;
    /**
     * 
     *
     * @var string
     */
    protected $publicKey;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $emails;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $subkeys;
    /**
     * 
     *
     * @var bool
     */
    protected $canSign;
    /**
     * 
     *
     * @var bool
     */
    protected $canEncryptComms;
    /**
     * 
     *
     * @var bool
     */
    protected $canEncryptStorage;
    /**
     * 
     *
     * @var bool
     */
    protected $canCertify;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $rawKey;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPrimaryKeyId() : int
    {
        return $this->primaryKeyId;
    }
    /**
     * 
     *
     * @param int $primaryKeyId
     *
     * @return self
     */
    public function setPrimaryKeyId(int $primaryKeyId) : self
    {
        $this->initialized['primaryKeyId'] = true;
        $this->primaryKeyId = $primaryKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKeyId() : string
    {
        return $this->keyId;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getPublicKey() : string
    {
        return $this->publicKey;
    }
    /**
     * 
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey) : self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param mixed[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getSubkeys() : array
    {
        return $this->subkeys;
    }
    /**
     * 
     *
     * @param mixed[] $subkeys
     *
     * @return self
     */
    public function setSubkeys(array $subkeys) : self
    {
        $this->initialized['subkeys'] = true;
        $this->subkeys = $subkeys;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanSign() : bool
    {
        return $this->canSign;
    }
    /**
     * 
     *
     * @param bool $canSign
     *
     * @return self
     */
    public function setCanSign(bool $canSign) : self
    {
        $this->initialized['canSign'] = true;
        $this->canSign = $canSign;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanEncryptComms() : bool
    {
        return $this->canEncryptComms;
    }
    /**
     * 
     *
     * @param bool $canEncryptComms
     *
     * @return self
     */
    public function setCanEncryptComms(bool $canEncryptComms) : self
    {
        $this->initialized['canEncryptComms'] = true;
        $this->canEncryptComms = $canEncryptComms;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanEncryptStorage() : bool
    {
        return $this->canEncryptStorage;
    }
    /**
     * 
     *
     * @param bool $canEncryptStorage
     *
     * @return self
     */
    public function setCanEncryptStorage(bool $canEncryptStorage) : self
    {
        $this->initialized['canEncryptStorage'] = true;
        $this->canEncryptStorage = $canEncryptStorage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanCertify() : bool
    {
        return $this->canCertify;
    }
    /**
     * 
     *
     * @param bool $canCertify
     *
     * @return self
     */
    public function setCanCertify(bool $canCertify) : self
    {
        $this->initialized['canCertify'] = true;
        $this->canCertify = $canCertify;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpiresAt() : ?string
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param string|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?string $expiresAt) : self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRawKey() : ?string
    {
        return $this->rawKey;
    }
    /**
     * 
     *
     * @param string|null $rawKey
     *
     * @return self
     */
    public function setRawKey(?string $rawKey) : self
    {
        $this->initialized['rawKey'] = true;
        $this->rawKey = $rawKey;
        return $this;
    }
}