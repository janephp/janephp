<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDropletBackupPolicy implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DropletBackupPolicyRecord
     */
    public DropletBackupPolicyRecord $policy;
    public function definedProperties(): array
    {
        return ['policy' => 'policy'];
    }
}