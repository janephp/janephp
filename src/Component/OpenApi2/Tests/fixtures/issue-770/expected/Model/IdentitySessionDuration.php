<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentitySessionDuration
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
    protected $requireLoginAgain;
    /**
     * @var int
     */
    protected $sessionValue;
    /**
     * @var string
     */
    protected $sessionUnit;
    /**
     * @return bool
     */
    public function getRequireLoginAgain(): bool
    {
        return $this->requireLoginAgain;
    }
    /**
     * @param bool $requireLoginAgain
     *
     * @return self
     */
    public function setRequireLoginAgain(bool $requireLoginAgain): self
    {
        $this->initialized['requireLoginAgain'] = true;
        $this->requireLoginAgain = $requireLoginAgain;
        return $this;
    }
    /**
     * @return int
     */
    public function getSessionValue(): int
    {
        return $this->sessionValue;
    }
    /**
     * @param int $sessionValue
     *
     * @return self
     */
    public function setSessionValue(int $sessionValue): self
    {
        $this->initialized['sessionValue'] = true;
        $this->sessionValue = $sessionValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getSessionUnit(): string
    {
        return $this->sessionUnit;
    }
    /**
     * @param string $sessionUnit
     *
     * @return self
     */
    public function setSessionUnit(string $sessionUnit): self
    {
        $this->initialized['sessionUnit'] = true;
        $this->sessionUnit = $sessionUnit;
        return $this;
    }
}