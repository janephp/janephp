<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDropletsSupportedBackupPolicies implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<SupportedDropletBackupPolicy>
     */
    public array $supportedPolicies;
    public function definedProperties(): array
    {
        return ['supportedPolicies' => 'supported_policies'];
    }
}