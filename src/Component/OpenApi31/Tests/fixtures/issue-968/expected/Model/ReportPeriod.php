<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue968\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalPropertiesInterface;
class ReportPeriod implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $from;
    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['from' => ['from', 'getFrom', 'setFrom']];
    }
}