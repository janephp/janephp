<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonQinq
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
     * @var int
     */
    protected $cvlan;
    /**
     * @var int
     */
    protected $svlan;
    /**
     * @return int
     */
    public function getCvlan(): int
    {
        return $this->cvlan;
    }
    /**
     * @param int $cvlan
     *
     * @return self
     */
    public function setCvlan(int $cvlan): self
    {
        $this->initialized['cvlan'] = true;
        $this->cvlan = $cvlan;
        return $this;
    }
    /**
     * @return int
     */
    public function getSvlan(): int
    {
        return $this->svlan;
    }
    /**
     * @param int $svlan
     *
     * @return self
     */
    public function setSvlan(int $svlan): self
    {
        $this->initialized['svlan'] = true;
        $this->svlan = $svlan;
        return $this;
    }
}