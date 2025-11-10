<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SciModifySciEnabled
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
     * Is SZ/SCI interface enabled or disabled
     *
     * @var bool
     */
    protected $sciEnabled;
    /**
     * Is SZ/SCI interface enabled or disabled
     *
     * @return bool
     */
    public function getSciEnabled(): bool
    {
        return $this->sciEnabled;
    }
    /**
     * Is SZ/SCI interface enabled or disabled
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