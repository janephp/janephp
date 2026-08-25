<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class DeleteRulesResponse implements AdditionalPropertiesInterface
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
     * @var RulesResponseMetadata
     */
    protected $meta;
    /**
     * @return RulesResponseMetadata
     */
    public function getMeta(): RulesResponseMetadata
    {
        return $this->meta;
    }
    /**
     * @param RulesResponseMetadata $meta
     *
     * @return self
     */
    public function setMeta(RulesResponseMetadata $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['meta' => ['meta', 'getMeta', 'setMeta']];
    }
}