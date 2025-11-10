<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceTestingConfigLoginRequest
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
     * password for test user
     *
     * @var string
     */
    protected $password;
    /**
     * name for test user
     *
     * @var string
     */
    protected $userName;
    /**
     * timezone offset, ex: '+8'
     *
     * @var string
     */
    protected $timeZoneUtcOffset;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * password for test user
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * password for test user
     *
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
     * name for test user
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * name for test user
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
    /**
     * timezone offset, ex: '+8'
     *
     * @return string
     */
    public function getTimeZoneUtcOffset(): string
    {
        return $this->timeZoneUtcOffset;
    }
    /**
     * timezone offset, ex: '+8'
     *
     * @param string $timeZoneUtcOffset
     *
     * @return self
     */
    public function setTimeZoneUtcOffset(string $timeZoneUtcOffset): self
    {
        $this->initialized['timeZoneUtcOffset'] = true;
        $this->timeZoneUtcOffset = $timeZoneUtcOffset;
        return $this;
    }
    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
}