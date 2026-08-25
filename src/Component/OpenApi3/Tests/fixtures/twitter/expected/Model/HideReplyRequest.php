<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class HideReplyRequest implements AdditionalPropertiesInterface
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
     * @var bool
     */
    protected $hidden;
    /**
     * @return bool
     */
    public function getHidden(): bool
    {
        return $this->hidden;
    }
    /**
     * @param bool $hidden
     *
     * @return self
     */
    public function setHidden(bool $hidden): self
    {
        $this->initialized['hidden'] = true;
        $this->hidden = $hidden;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['hidden' => ['hidden', 'getHidden', 'setHidden']];
    }
}