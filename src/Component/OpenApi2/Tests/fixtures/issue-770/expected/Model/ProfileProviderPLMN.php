<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderPLMN
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * MCC
     *
     * @var string
     */
    protected $mcc;
    /**
     * MNC
     *
     * @var string
     */
    protected $mnc;
    /**
     * MCC
     *
     * @return string
     */
    public function getMcc(): string
    {
        return $this->mcc;
    }
    /**
     * MCC
     *
     * @param string $mcc
     *
     * @return self
     */
    public function setMcc(string $mcc): self
    {
        $this->initialized['mcc'] = true;
        $this->mcc = $mcc;
        return $this;
    }
    /**
     * MNC
     *
     * @return string
     */
    public function getMnc(): string
    {
        return $this->mnc;
    }
    /**
     * MNC
     *
     * @param string $mnc
     *
     * @return self
     */
    public function setMnc(string $mnc): self
    {
        $this->initialized['mnc'] = true;
        $this->mnc = $mnc;
        return $this;
    }
}