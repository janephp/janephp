<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VlanNameProfileVlanNameRule
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
     * @var string
     */
    protected $vlanName;
    /**
     * @var int
     */
    protected $vlanId;
    /**
     * @return string
     */
    public function getVlanName(): string
    {
        return $this->vlanName;
    }
    /**
     * @param string $vlanName
     *
     * @return self
     */
    public function setVlanName(string $vlanName): self
    {
        $this->initialized['vlanName'] = true;
        $this->vlanName = $vlanName;
        return $this;
    }
    /**
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
}