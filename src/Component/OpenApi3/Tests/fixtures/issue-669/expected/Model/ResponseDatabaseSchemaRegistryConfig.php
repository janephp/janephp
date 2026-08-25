<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseSchemaRegistryConfig implements AdditionalPropertiesInterface
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
     * The compatibility level of the schema registry.
     *
     * @var string
     */
    protected $compatibilityLevel;
    /**
     * The compatibility level of the schema registry.
     *
     * @return string
     */
    public function getCompatibilityLevel(): string
    {
        return $this->compatibilityLevel;
    }
    /**
     * The compatibility level of the schema registry.
     *
     * @param string $compatibilityLevel
     *
     * @return self
     */
    public function setCompatibilityLevel(string $compatibilityLevel): self
    {
        $this->initialized['compatibilityLevel'] = true;
        $this->compatibilityLevel = $compatibilityLevel;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['compatibilityLevel' => ['compatibility_level', 'getCompatibilityLevel', 'setCompatibilityLevel']];
    }
}