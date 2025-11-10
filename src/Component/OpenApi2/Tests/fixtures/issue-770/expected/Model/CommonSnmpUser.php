<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonSnmpUser
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
     * name of the SNMP User.
     *
     * @var string
     */
    protected $userName;
    /**
     * authProtocol of the SNMP User.
     *
     * @var string
     */
    protected $authProtocol;
    /**
     * authPassword of the SNMP User.
     *
     * @var string
     */
    protected $authPassword;
    /**
     * privProtocol of the SNMP User.
     *
     * @var string
     */
    protected $privProtocol;
    /**
     * privPassword of the SNMP User.
     *
     * @var string
     */
    protected $privPassword;
    /**
     * read privilege of the SNMP User
     *
     * @var bool
     */
    protected $readEnabled;
    /**
     * write privilege of the SNMP User
     *
     * @var bool
     */
    protected $writeEnabled;
    /**
     * notification privilege of the SNMP User
     *
     * @var bool
     */
    protected $notificationEnabled;
    /**
     * type of the notification privilege
     *
     * @var string
     */
    protected $notificationType;
    /**
     * Trap List of the SNMP User
     *
     * @var list<CommonTargetConfig>
     */
    protected $notificationTarget;
    /**
     * name of the SNMP User.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * name of the SNMP User.
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
     * authProtocol of the SNMP User.
     *
     * @return string
     */
    public function getAuthProtocol(): string
    {
        return $this->authProtocol;
    }
    /**
     * authProtocol of the SNMP User.
     *
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
     * authPassword of the SNMP User.
     *
     * @return string
     */
    public function getAuthPassword(): string
    {
        return $this->authPassword;
    }
    /**
     * authPassword of the SNMP User.
     *
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
     * privProtocol of the SNMP User.
     *
     * @return string
     */
    public function getPrivProtocol(): string
    {
        return $this->privProtocol;
    }
    /**
     * privProtocol of the SNMP User.
     *
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
     * privPassword of the SNMP User.
     *
     * @return string
     */
    public function getPrivPassword(): string
    {
        return $this->privPassword;
    }
    /**
     * privPassword of the SNMP User.
     *
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
     * read privilege of the SNMP User
     *
     * @return bool
     */
    public function getReadEnabled(): bool
    {
        return $this->readEnabled;
    }
    /**
     * read privilege of the SNMP User
     *
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
     * write privilege of the SNMP User
     *
     * @return bool
     */
    public function getWriteEnabled(): bool
    {
        return $this->writeEnabled;
    }
    /**
     * write privilege of the SNMP User
     *
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
     * notification privilege of the SNMP User
     *
     * @return bool
     */
    public function getNotificationEnabled(): bool
    {
        return $this->notificationEnabled;
    }
    /**
     * notification privilege of the SNMP User
     *
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
     * type of the notification privilege
     *
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
    /**
     * type of the notification privilege
     *
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
     * Trap List of the SNMP User
     *
     * @return list<CommonTargetConfig>
     */
    public function getNotificationTarget(): array
    {
        return $this->notificationTarget;
    }
    /**
     * Trap List of the SNMP User
     *
     * @param list<CommonTargetConfig> $notificationTarget
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