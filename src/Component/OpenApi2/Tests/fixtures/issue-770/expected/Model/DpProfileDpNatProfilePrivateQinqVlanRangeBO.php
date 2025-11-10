<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpNatProfilePrivateQinqVlanRangeBO
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
     * cvlan
     *
     * @var string
     */
    protected $cvlan;
    /**
     * svlan
     *
     * @var string
     */
    protected $svlan;
    /**
     * cvlan
     *
     * @return string
     */
    public function getCvlan(): string
    {
        return $this->cvlan;
    }
    /**
     * cvlan
     *
     * @param string $cvlan
     *
     * @return self
     */
    public function setCvlan(string $cvlan): self
    {
        $this->initialized['cvlan'] = true;
        $this->cvlan = $cvlan;
        return $this;
    }
    /**
     * svlan
     *
     * @return string
     */
    public function getSvlan(): string
    {
        return $this->svlan;
    }
    /**
     * svlan
     *
     * @param string $svlan
     *
     * @return self
     */
    public function setSvlan(string $svlan): self
    {
        $this->initialized['svlan'] = true;
        $this->svlan = $svlan;
        return $this;
    }
}