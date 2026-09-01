<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidUsersUsernamePutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var UserSettings
     */
    public UserSettings $settings;
    public function definedProperties(): array
    {
        return ['settings' => 'settings'];
    }
}