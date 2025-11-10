<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelExternalAntenna
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
     * @var bool
     */
    protected $enabled;
    /**
     * @var int
     */
    protected $dbi;
    /**
     * @var string
     */
    protected $chainMask;
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getDbi(): int
    {
        return $this->dbi;
    }
    /**
     * @param int $dbi
     *
     * @return self
     */
    public function setDbi(int $dbi): self
    {
        $this->initialized['dbi'] = true;
        $this->dbi = $dbi;
        return $this;
    }
    /**
     * @return string
     */
    public function getChainMask(): string
    {
        return $this->chainMask;
    }
    /**
     * @param string $chainMask
     *
     * @return self
     */
    public function setChainMask(string $chainMask): self
    {
        $this->initialized['chainMask'] = true;
        $this->chainMask = $chainMask;
        return $this;
    }
}