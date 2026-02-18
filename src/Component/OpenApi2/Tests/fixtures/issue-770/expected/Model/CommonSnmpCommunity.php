<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonSnmpCommunity
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
     * name of the SNMP Community.
     *
     * @var string
     */
    protected $communityName;
    /**
     * read privilege of the SNMP Coummunity
     *
     * @var bool
     */
    protected $readEnabled;
    /**
     * write privilege of the SNMP Coummunity
     *
     * @var bool
     */
    protected $writeEnabled;
    /**
     * notification privilege of the SNMP Coummunity
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
     * Trap List of the SNMP Coummunity
     *
     * @var list<CommonTargetConfig>
     */
    protected $notificationTarget;
    /**
     * name of the SNMP Community.
     *
     * @return string
     */
    public function getCommunityName(): string
    {
        return $this->communityName;
    }
    /**
     * name of the SNMP Community.
     *
     * @param string $communityName
     *
     * @return self
     */
    public function setCommunityName(string $communityName): self
    {
        $this->initialized['communityName'] = true;
        $this->communityName = $communityName;
        return $this;
    }
    /**
     * read privilege of the SNMP Coummunity
     *
     * @return bool
     */
    public function getReadEnabled(): bool
    {
        return $this->readEnabled;
    }
    /**
     * read privilege of the SNMP Coummunity
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
     * write privilege of the SNMP Coummunity
     *
     * @return bool
     */
    public function getWriteEnabled(): bool
    {
        return $this->writeEnabled;
    }
    /**
     * write privilege of the SNMP Coummunity
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
     * notification privilege of the SNMP Coummunity
     *
     * @return bool
     */
    public function getNotificationEnabled(): bool
    {
        return $this->notificationEnabled;
    }
    /**
     * notification privilege of the SNMP Coummunity
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
     * Trap List of the SNMP Coummunity
     *
     * @return list<CommonTargetConfig>
     */
    public function getNotificationTarget(): array
    {
        return $this->notificationTarget;
    }
    /**
     * Trap List of the SNMP Coummunity
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