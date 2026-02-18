<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApLogin
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
    protected $apLoginName;
    /**
     * @var string
     */
    protected $apLoginPassword;
    /**
     * @return string
     */
    public function getApLoginName(): string
    {
        return $this->apLoginName;
    }
    /**
     * @param string $apLoginName
     *
     * @return self
     */
    public function setApLoginName(string $apLoginName): self
    {
        $this->initialized['apLoginName'] = true;
        $this->apLoginName = $apLoginName;
        return $this;
    }
    /**
     * @return string
     */
    public function getApLoginPassword(): string
    {
        return $this->apLoginPassword;
    }
    /**
     * @param string $apLoginPassword
     *
     * @return self
     */
    public function setApLoginPassword(string $apLoginPassword): self
    {
        $this->initialized['apLoginPassword'] = true;
        $this->apLoginPassword = $apLoginPassword;
        return $this;
    }
}