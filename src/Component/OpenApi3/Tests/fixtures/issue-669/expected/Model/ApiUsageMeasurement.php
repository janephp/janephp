<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUsageMeasurement implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $tokens;
    /**
     * @var string
     */
    protected $usageType;
    /**
     * @return int
     */
    public function getTokens(): int
    {
        return $this->tokens;
    }
    /**
     * @param int $tokens
     *
     * @return self
     */
    public function setTokens(int $tokens): self
    {
        $this->initialized['tokens'] = true;
        $this->tokens = $tokens;
        return $this;
    }
    /**
     * @return string
     */
    public function getUsageType(): string
    {
        return $this->usageType;
    }
    /**
     * @param string $usageType
     *
     * @return self
     */
    public function setUsageType(string $usageType): self
    {
        $this->initialized['usageType'] = true;
        $this->usageType = $usageType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['tokens' => ['tokens', 'getTokens', 'setTokens'], 'usageType' => ['usage_type', 'getUsageType', 'setUsageType']];
    }
}