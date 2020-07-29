<?php

namespace Github\Model;

class GpgKey
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
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
     * @var GpgKeyEmailsItem[]
     */
    protected $emails;
    /**
     * 
     *
     * @var GpgKeySubkeysItem[]
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
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
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
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPrimaryKeyId() : ?int
    {
        return $this->primaryKeyId;
    }
    /**
     * 
     *
     * @param int|null $primaryKeyId
     *
     * @return self
     */
    public function setPrimaryKeyId(?int $primaryKeyId) : self
    {
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
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     * 
     *
     * @return GpgKeyEmailsItem[]
     */
    public function getEmails() : array
    {
        return $this->emails;
    }
    /**
     * 
     *
     * @param GpgKeyEmailsItem[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails) : self
    {
        $this->emails = $emails;
        return $this;
    }
    /**
     * 
     *
     * @return GpgKeySubkeysItem[]
     */
    public function getSubkeys() : array
    {
        return $this->subkeys;
    }
    /**
     * 
     *
     * @param GpgKeySubkeysItem[] $subkeys
     *
     * @return self
     */
    public function setSubkeys(array $subkeys) : self
    {
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
        $this->canCertify = $canCertify;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getExpiresAt() : ?\DateTime
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(?\DateTime $expiresAt) : self
    {
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
        $this->rawKey = $rawKey;
        return $this;
    }
}