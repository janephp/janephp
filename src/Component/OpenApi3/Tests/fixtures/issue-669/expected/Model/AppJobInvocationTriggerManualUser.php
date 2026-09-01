<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerManualUser implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $uuid;
    /**
     * @var string
     */
    public string $email;
    /**
     * @var string
     */
    public string $fullName;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'email' => 'email', 'fullName' => 'full_name'];
    }
}