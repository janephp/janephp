<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseOpensearchIndexes implements AdditionalPropertiesInterface
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
     * @var list<array<string, mixed>>
     */
    protected $indexes;
    /**
     * @return list<array<string, mixed>>
     */
    public function getIndexes(): array
    {
        return $this->indexes;
    }
    /**
     * @param list<array<string, mixed>> $indexes
     *
     * @return self
     */
    public function setIndexes(array $indexes): self
    {
        $this->initialized['indexes'] = true;
        $this->indexes = $indexes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['indexes' => ['indexes', 'getIndexes', 'setIndexes']];
    }
}