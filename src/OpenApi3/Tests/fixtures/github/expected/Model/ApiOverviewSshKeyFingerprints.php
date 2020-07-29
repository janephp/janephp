<?php

namespace Github\Model;

class ApiOverviewSshKeyFingerprints
{
    /**
     * 
     *
     * @var string
     */
    protected $mD5RSA;
    /**
     * 
     *
     * @var string
     */
    protected $mD5DSA;
    /**
     * 
     *
     * @var string
     */
    protected $sHA256RSA;
    /**
     * 
     *
     * @var string
     */
    protected $sHA256DSA;
    /**
     * 
     *
     * @return string
     */
    public function getMD5RSA() : string
    {
        return $this->mD5RSA;
    }
    /**
     * 
     *
     * @param string $mD5RSA
     *
     * @return self
     */
    public function setMD5RSA(string $mD5RSA) : self
    {
        $this->mD5RSA = $mD5RSA;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMD5DSA() : string
    {
        return $this->mD5DSA;
    }
    /**
     * 
     *
     * @param string $mD5DSA
     *
     * @return self
     */
    public function setMD5DSA(string $mD5DSA) : self
    {
        $this->mD5DSA = $mD5DSA;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSHA256RSA() : string
    {
        return $this->sHA256RSA;
    }
    /**
     * 
     *
     * @param string $sHA256RSA
     *
     * @return self
     */
    public function setSHA256RSA(string $sHA256RSA) : self
    {
        $this->sHA256RSA = $sHA256RSA;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSHA256DSA() : string
    {
        return $this->sHA256DSA;
    }
    /**
     * 
     *
     * @param string $sHA256DSA
     *
     * @return self
     */
    public function setSHA256DSA(string $sHA256DSA) : self
    {
        $this->sHA256DSA = $sHA256DSA;
        return $this;
    }
}