<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSms
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
     * SMS Id
     *
     * @var string
     */
    protected $id;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Server type
     *
     * @var string
     */
    protected $serverType;
    /**
     * Enabled SMS server or not
     *
     * @var int
     */
    protected $enabled;
    /**
     * Server Name
     *
     * @var string
     */
    protected $serverName;
    /**
     * Account SID
     *
     * @var string
     */
    protected $accountSid;
    /**
     * Auth Token
     *
     * @var string
     */
    protected $authToken;
    /**
     * From
     *
     * @var string
     */
    protected $from;
    /**
     * SMS Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * SMS Id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Server type
     *
     * @return string
     */
    public function getServerType(): string
    {
        return $this->serverType;
    }
    /**
     * Server type
     *
     * @param string $serverType
     *
     * @return self
     */
    public function setServerType(string $serverType): self
    {
        $this->initialized['serverType'] = true;
        $this->serverType = $serverType;
        return $this;
    }
    /**
     * Enabled SMS server or not
     *
     * @return int
     */
    public function getEnabled(): int
    {
        return $this->enabled;
    }
    /**
     * Enabled SMS server or not
     *
     * @param int $enabled
     *
     * @return self
     */
    public function setEnabled(int $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Server Name
     *
     * @return string
     */
    public function getServerName(): string
    {
        return $this->serverName;
    }
    /**
     * Server Name
     *
     * @param string $serverName
     *
     * @return self
     */
    public function setServerName(string $serverName): self
    {
        $this->initialized['serverName'] = true;
        $this->serverName = $serverName;
        return $this;
    }
    /**
     * Account SID
     *
     * @return string
     */
    public function getAccountSid(): string
    {
        return $this->accountSid;
    }
    /**
     * Account SID
     *
     * @param string $accountSid
     *
     * @return self
     */
    public function setAccountSid(string $accountSid): self
    {
        $this->initialized['accountSid'] = true;
        $this->accountSid = $accountSid;
        return $this;
    }
    /**
     * Auth Token
     *
     * @return string
     */
    public function getAuthToken(): string
    {
        return $this->authToken;
    }
    /**
     * Auth Token
     *
     * @param string $authToken
     *
     * @return self
     */
    public function setAuthToken(string $authToken): self
    {
        $this->initialized['authToken'] = true;
        $this->authToken = $authToken;
        return $this;
    }
    /**
     * From
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * From
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
}