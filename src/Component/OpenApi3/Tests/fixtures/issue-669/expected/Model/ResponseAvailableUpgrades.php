<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAvailableUpgrades implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<KubernetesVersion>|null
     */
    public ?array $availableUpgradeVersions;
    public function definedProperties(): array
    {
        return ['availableUpgradeVersions' => 'available_upgrade_versions'];
    }
}