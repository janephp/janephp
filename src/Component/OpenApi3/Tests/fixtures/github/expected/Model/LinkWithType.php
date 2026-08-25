<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class LinkWithType implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $href;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }
    /**
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->initialized['href'] = true;
        $this->href = $href;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['href' => ['href', 'getHref', 'setHref'], 'type' => ['type', 'getType', 'setType']];
    }
}