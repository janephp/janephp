<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonHealthCheckPolicy
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
     * Response window
     *
     * @var int
     */
    protected $responseWindow = 20;
    /**
     * Revive interval
     *
     * @var int
     */
    protected $reviveInterval = 120;
    /**
     * Zombie period
     *
     * @var int
     */
    protected $zombiePeriod = 40;
    /**
     * Response Fail
     *
     * @var bool
     */
    protected $responseFail = 'false';
    /**
     * Response window
     *
     * @return int
     */
    public function getResponseWindow(): int
    {
        return $this->responseWindow;
    }
    /**
     * Response window
     *
     * @param int $responseWindow
     *
     * @return self
     */
    public function setResponseWindow(int $responseWindow): self
    {
        $this->initialized['responseWindow'] = true;
        $this->responseWindow = $responseWindow;
        return $this;
    }
    /**
     * Revive interval
     *
     * @return int
     */
    public function getReviveInterval(): int
    {
        return $this->reviveInterval;
    }
    /**
     * Revive interval
     *
     * @param int $reviveInterval
     *
     * @return self
     */
    public function setReviveInterval(int $reviveInterval): self
    {
        $this->initialized['reviveInterval'] = true;
        $this->reviveInterval = $reviveInterval;
        return $this;
    }
    /**
     * Zombie period
     *
     * @return int
     */
    public function getZombiePeriod(): int
    {
        return $this->zombiePeriod;
    }
    /**
     * Zombie period
     *
     * @param int $zombiePeriod
     *
     * @return self
     */
    public function setZombiePeriod(int $zombiePeriod): self
    {
        $this->initialized['zombiePeriod'] = true;
        $this->zombiePeriod = $zombiePeriod;
        return $this;
    }
    /**
     * Response Fail
     *
     * @return bool
     */
    public function getResponseFail(): bool
    {
        return $this->responseFail;
    }
    /**
     * Response Fail
     *
     * @param bool $responseFail
     *
     * @return self
     */
    public function setResponseFail(bool $responseFail): self
    {
        $this->initialized['responseFail'] = true;
        $this->responseFail = $responseFail;
        return $this;
    }
}