<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSnmpAgentProfileApSnmpUser
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
    protected $authProtocol;
    /**
     * @var string
     */
    protected $authPassword;
    /**
     * @var string
     */
    protected $privProtocol;
    /**
     * @var string
     */
    protected $privPassword;
    /**
     * @var bool
     */
    protected $readEnabled;
    /**
     * @var bool
     */
    protected $writeEnabled;
    /**
     * @var bool
     */
    protected $notificationEnabled;
    /**
     * @var string
     */
    protected $notificationType;
    /**
     * @var list<ApSnmpAgentProfileTargetConfig>
     */
    protected $notificationTarget;
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
    public function getAuthProtocol(): string
    {
        return $this->authProtocol;
    }
    /**
     * @param string $authProtocol
     *
     * @return self
     */
    public function setAuthProtocol(string $authProtocol): self
    {
        $this->initialized['authProtocol'] = true;
        $this->authProtocol = $authProtocol;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthPassword(): string
    {
        return $this->authPassword;
    }
    /**
     * @param string $authPassword
     *
     * @return self
     */
    public function setAuthPassword(string $authPassword): self
    {
        $this->initialized['authPassword'] = true;
        $this->authPassword = $authPassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrivProtocol(): string
    {
        return $this->privProtocol;
    }
    /**
     * @param string $privProtocol
     *
     * @return self
     */
    public function setPrivProtocol(string $privProtocol): self
    {
        $this->initialized['privProtocol'] = true;
        $this->privProtocol = $privProtocol;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrivPassword(): string
    {
        return $this->privPassword;
    }
    /**
     * @param string $privPassword
     *
     * @return self
     */
    public function setPrivPassword(string $privPassword): self
    {
        $this->initialized['privPassword'] = true;
        $this->privPassword = $privPassword;
        return $this;
    }
    /**
     * @return bool
     */
    public function getReadEnabled(): bool
    {
        return $this->readEnabled;
    }
    /**
     * @param bool $readEnabled
     *
     * @return self
     */
    public function setReadEnabled(bool $readEnabled): self
    {
        $this->initialized['readEnabled'] = true;
        $this->readEnabled = $readEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getWriteEnabled(): bool
    {
        return $this->writeEnabled;
    }
    /**
     * @param bool $writeEnabled
     *
     * @return self
     */
    public function setWriteEnabled(bool $writeEnabled): self
    {
        $this->initialized['writeEnabled'] = true;
        $this->writeEnabled = $writeEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getNotificationEnabled(): bool
    {
        return $this->notificationEnabled;
    }
    /**
     * @param bool $notificationEnabled
     *
     * @return self
     */
    public function setNotificationEnabled(bool $notificationEnabled): self
    {
        $this->initialized['notificationEnabled'] = true;
        $this->notificationEnabled = $notificationEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
    /**
     * @param string $notificationType
     *
     * @return self
     */
    public function setNotificationType(string $notificationType): self
    {
        $this->initialized['notificationType'] = true;
        $this->notificationType = $notificationType;
        return $this;
    }
    /**
     * @return list<ApSnmpAgentProfileTargetConfig>
     */
    public function getNotificationTarget(): array
    {
        return $this->notificationTarget;
    }
    /**
     * @param list<ApSnmpAgentProfileTargetConfig> $notificationTarget
     *
     * @return self
     */
    public function setNotificationTarget(array $notificationTarget): self
    {
        $this->initialized['notificationTarget'] = true;
        $this->notificationTarget = $notificationTarget;
        return $this;
    }
}