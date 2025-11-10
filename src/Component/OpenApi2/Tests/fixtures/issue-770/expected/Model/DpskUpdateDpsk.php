<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskUpdateDpsk
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
     * User Name of DPSK
     *
     * @var string
     */
    protected $userName;
    /**
     * User Name of DPSK
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name of DPSK
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
}