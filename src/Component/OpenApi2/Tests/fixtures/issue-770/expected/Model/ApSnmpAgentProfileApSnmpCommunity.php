<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApSnmpAgentProfileApSnmpCommunity
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
    protected $communityName;
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
    public function getCommunityName(): string
    {
        return $this->communityName;
    }
    /**
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