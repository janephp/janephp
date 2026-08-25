<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidUsersUsernamePutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var UserSettings
     */
    protected $settings;
    /**
     * @return UserSettings
     */
    public function getSettings(): UserSettings
    {
        return $this->settings;
    }
    /**
     * @param UserSettings $settings
     *
     * @return self
     */
    public function setSettings(UserSettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['settings' => ['settings', 'getSettings', 'setSettings']];
    }
}