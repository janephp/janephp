<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateClientIsolationWhitelist
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Client Isolation Whitelist array
     *
     * @var list<ProfileClientIsolationEntry>
     */
    protected $whitelist;
    /**
     * Client Isolation Auto Enable
     *
     * @var bool
     */
    protected $clientIsolationAutoEnabled;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Client Isolation Whitelist array
     *
     * @return list<ProfileClientIsolationEntry>
     */
    public function getWhitelist(): array
    {
        return $this->whitelist;
    }
    /**
     * Client Isolation Whitelist array
     *
     * @param list<ProfileClientIsolationEntry> $whitelist
     *
     * @return self
     */
    public function setWhitelist(array $whitelist): self
    {
        $this->initialized['whitelist'] = true;
        $this->whitelist = $whitelist;
        return $this;
    }
    /**
     * Client Isolation Auto Enable
     *
     * @return bool
     */
    public function getClientIsolationAutoEnabled(): bool
    {
        return $this->clientIsolationAutoEnabled;
    }
    /**
     * Client Isolation Auto Enable
     *
     * @param bool $clientIsolationAutoEnabled
     *
     * @return self
     */
    public function setClientIsolationAutoEnabled(bool $clientIsolationAutoEnabled): self
    {
        $this->initialized['clientIsolationAutoEnabled'] = true;
        $this->clientIsolationAutoEnabled = $clientIsolationAutoEnabled;
        return $this;
    }
}