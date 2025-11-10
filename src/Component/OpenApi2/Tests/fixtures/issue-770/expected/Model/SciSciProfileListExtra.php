<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SciSciProfileListExtra
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
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @var bool
     */
    protected $sciEnabled;
    /**
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @return bool
     */
    public function getSciEnabled(): bool
    {
        return $this->sciEnabled;
    }
    /**
     * SCI password of the SCI profile for SZ/SCI interface
     *
     * @param bool $sciEnabled
     *
     * @return self
     */
    public function setSciEnabled(bool $sciEnabled): self
    {
        $this->initialized['sciEnabled'] = true;
        $this->sciEnabled = $sciEnabled;
        return $this;
    }
}