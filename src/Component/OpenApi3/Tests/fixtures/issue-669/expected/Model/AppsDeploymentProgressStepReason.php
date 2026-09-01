<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentProgressStepReason implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $code;
    /**
     * @var string
     */
    public string $message;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'message' => 'message'];
    }
}