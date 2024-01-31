<?php

namespace Github\Model;

class GitCommitVerification extends \ArrayObject
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
     * 
     *
     * @var bool
     */
    protected $verified;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var string|null
     */
    protected $signature;
    /**
     * 
     *
     * @var string|null
     */
    protected $payload;
    /**
     * 
     *
     * @return bool
     */
    public function getVerified() : bool
    {
        return $this->verified;
    }
    /**
     * 
     *
     * @param bool $verified
     *
     * @return self
     */
    public function setVerified(bool $verified) : self
    {
        $this->initialized['verified'] = true;
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSignature() : ?string
    {
        return $this->signature;
    }
    /**
     * 
     *
     * @param string|null $signature
     *
     * @return self
     */
    public function setSignature(?string $signature) : self
    {
        $this->initialized['signature'] = true;
        $this->signature = $signature;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPayload() : ?string
    {
        return $this->payload;
    }
    /**
     * 
     *
     * @param string|null $payload
     *
     * @return self
     */
    public function setPayload(?string $payload) : self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
}