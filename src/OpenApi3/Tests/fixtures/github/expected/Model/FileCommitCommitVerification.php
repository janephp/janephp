<?php

namespace Github\Model;

class FileCommitCommitVerification
{
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
        $this->payload = $payload;
        return $this;
    }
}