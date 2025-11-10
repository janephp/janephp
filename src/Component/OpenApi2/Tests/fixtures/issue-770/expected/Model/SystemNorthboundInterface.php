<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemNorthboundInterface
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
    protected $userName;
    /**
     * @var string
     */
    protected $password;
    /**
     * AuthType of the Radius used in Northbound Interface, the value should be "PAP" or "CHAP".
     *
     * @var string
     */
    protected $radiusAuthType;
    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
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
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * AuthType of the Radius used in Northbound Interface, the value should be "PAP" or "CHAP".
     *
     * @return string
     */
    public function getRadiusAuthType(): string
    {
        return $this->radiusAuthType;
    }
    /**
     * AuthType of the Radius used in Northbound Interface, the value should be "PAP" or "CHAP".
     *
     * @param string $radiusAuthType
     *
     * @return self
     */
    public function setRadiusAuthType(string $radiusAuthType): self
    {
        $this->initialized['radiusAuthType'] = true;
        $this->radiusAuthType = $radiusAuthType;
        return $this;
    }
}