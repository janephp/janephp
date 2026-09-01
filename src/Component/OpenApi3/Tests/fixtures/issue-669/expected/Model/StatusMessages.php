<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class StatusMessages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Status information about the cluster which impacts it's lifecycle.
     *
     * @var string
     */
    public string $message;
    /**
     * A timestamp in ISO8601 format that represents when the status message was emitted.
     *
     * @var \DateTime
     */
    public \DateTime $timestamp;
    public function definedProperties(): array
    {
        return ['message' => 'message', 'timestamp' => 'timestamp'];
    }
}