<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSystemSettings
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
     * Enabled AP number limit feature or not
     *
     * @var bool
     */
    protected $apNumberLimitEnabled;
    /**
     * @var list<SystemApNumberLimitSettingOfDomain>
     */
    protected $apNumberLimitSettingsOfDomain;
    /**
     * @var list<SystemApNumberLimitSettingOfZone>
     */
    protected $apNumberLimitSettingsOfZone;
    /**
     * Enabled AP Mac OUI feature or no
     *
     * @var bool
     */
    protected $apMacOUIEnabled;
    /**
     * Enabled AP number limit feature or not
     *
     * @return bool
     */
    public function getApNumberLimitEnabled(): bool
    {
        return $this->apNumberLimitEnabled;
    }
    /**
     * Enabled AP number limit feature or not
     *
     * @param bool $apNumberLimitEnabled
     *
     * @return self
     */
    public function setApNumberLimitEnabled(bool $apNumberLimitEnabled): self
    {
        $this->initialized['apNumberLimitEnabled'] = true;
        $this->apNumberLimitEnabled = $apNumberLimitEnabled;
        return $this;
    }
    /**
     * @return list<SystemApNumberLimitSettingOfDomain>
     */
    public function getApNumberLimitSettingsOfDomain(): array
    {
        return $this->apNumberLimitSettingsOfDomain;
    }
    /**
     * @param list<SystemApNumberLimitSettingOfDomain> $apNumberLimitSettingsOfDomain
     *
     * @return self
     */
    public function setApNumberLimitSettingsOfDomain(array $apNumberLimitSettingsOfDomain): self
    {
        $this->initialized['apNumberLimitSettingsOfDomain'] = true;
        $this->apNumberLimitSettingsOfDomain = $apNumberLimitSettingsOfDomain;
        return $this;
    }
    /**
     * @return list<SystemApNumberLimitSettingOfZone>
     */
    public function getApNumberLimitSettingsOfZone(): array
    {
        return $this->apNumberLimitSettingsOfZone;
    }
    /**
     * @param list<SystemApNumberLimitSettingOfZone> $apNumberLimitSettingsOfZone
     *
     * @return self
     */
    public function setApNumberLimitSettingsOfZone(array $apNumberLimitSettingsOfZone): self
    {
        $this->initialized['apNumberLimitSettingsOfZone'] = true;
        $this->apNumberLimitSettingsOfZone = $apNumberLimitSettingsOfZone;
        return $this;
    }
    /**
     * Enabled AP Mac OUI feature or no
     *
     * @return bool
     */
    public function getApMacOUIEnabled(): bool
    {
        return $this->apMacOUIEnabled;
    }
    /**
     * Enabled AP Mac OUI feature or no
     *
     * @param bool $apMacOUIEnabled
     *
     * @return self
     */
    public function setApMacOUIEnabled(bool $apMacOUIEnabled): self
    {
        $this->initialized['apMacOUIEnabled'] = true;
        $this->apMacOUIEnabled = $apMacOUIEnabled;
        return $this;
    }
}