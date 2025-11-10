<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SessionManagementRuckusSession
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
     * The last access time
     *
     * @var string
     */
    protected $lastAccessTime;
    /**
     * The last access URI
     *
     * @var string
     */
    protected $lastAccessURI;
    /**
     * The user UUID
     *
     * @var string
     */
    protected $userUUID;
    /**
     * Logon user name
     *
     * @var string
     */
    protected $userName;
    /**
     * The user session ID
     *
     * @var string
     */
    protected $sessionId;
    /**
     * The source IP address
     *
     * @var string
     */
    protected $sourceIp;
    /**
     * The authentication type of logon
     *
     * @var string
     */
    protected $authType;
    /**
     * The last access time
     *
     * @return string
     */
    public function getLastAccessTime(): string
    {
        return $this->lastAccessTime;
    }
    /**
     * The last access time
     *
     * @param string $lastAccessTime
     *
     * @return self
     */
    public function setLastAccessTime(string $lastAccessTime): self
    {
        $this->initialized['lastAccessTime'] = true;
        $this->lastAccessTime = $lastAccessTime;
        return $this;
    }
    /**
     * The last access URI
     *
     * @return string
     */
    public function getLastAccessURI(): string
    {
        return $this->lastAccessURI;
    }
    /**
     * The last access URI
     *
     * @param string $lastAccessURI
     *
     * @return self
     */
    public function setLastAccessURI(string $lastAccessURI): self
    {
        $this->initialized['lastAccessURI'] = true;
        $this->lastAccessURI = $lastAccessURI;
        return $this;
    }
    /**
     * The user UUID
     *
     * @return string
     */
    public function getUserUUID(): string
    {
        return $this->userUUID;
    }
    /**
     * The user UUID
     *
     * @param string $userUUID
     *
     * @return self
     */
    public function setUserUUID(string $userUUID): self
    {
        $this->initialized['userUUID'] = true;
        $this->userUUID = $userUUID;
        return $this;
    }
    /**
     * Logon user name
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * Logon user name
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
     * The user session ID
     *
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->sessionId;
    }
    /**
     * The user session ID
     *
     * @param string $sessionId
     *
     * @return self
     */
    public function setSessionId(string $sessionId): self
    {
        $this->initialized['sessionId'] = true;
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * The source IP address
     *
     * @return string
     */
    public function getSourceIp(): string
    {
        return $this->sourceIp;
    }
    /**
     * The source IP address
     *
     * @param string $sourceIp
     *
     * @return self
     */
    public function setSourceIp(string $sourceIp): self
    {
        $this->initialized['sourceIp'] = true;
        $this->sourceIp = $sourceIp;
        return $this;
    }
    /**
     * The authentication type of logon
     *
     * @return string
     */
    public function getAuthType(): string
    {
        return $this->authType;
    }
    /**
     * The authentication type of logon
     *
     * @param string $authType
     *
     * @return self
     */
    public function setAuthType(string $authType): self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
        return $this;
    }
}