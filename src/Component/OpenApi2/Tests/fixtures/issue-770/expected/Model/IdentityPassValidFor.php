<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityPassValidFor
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
    protected $expirationValue;
    /**
     * @var string
     */
    protected $expirationUnit;
    /**
     * @return int
     */
    public function getExpirationValue(): int
    {
        return $this->expirationValue;
    }
    /**
     * @param int $expirationValue
     *
     * @return self
     */
    public function setExpirationValue(int $expirationValue): self
    {
        $this->initialized['expirationValue'] = true;
        $this->expirationValue = $expirationValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpirationUnit(): string
    {
        return $this->expirationUnit;
    }
    /**
     * @param string $expirationUnit
     *
     * @return self
     */
    public function setExpirationUnit(string $expirationUnit): self
    {
        $this->initialized['expirationUnit'] = true;
        $this->expirationUnit = $expirationUnit;
        return $this;
    }
}