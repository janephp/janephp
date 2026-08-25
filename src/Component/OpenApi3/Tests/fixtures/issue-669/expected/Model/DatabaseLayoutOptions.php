<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseLayoutOptions implements AdditionalPropertiesInterface
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
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @var list<DatabaseLayoutOption>
     */
    protected $layouts;
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @return list<DatabaseLayoutOption>
     */
    public function getLayouts(): array
    {
        return $this->layouts;
    }
    /**
     * An array of objects, each indicating the node sizes (otherwise referred to as slugs) that are available with various numbers of nodes in the database cluster. Each slugs denotes the node's identifier, CPU, and RAM (in that order).
     *
     * @param list<DatabaseLayoutOption> $layouts
     *
     * @return self
     */
    public function setLayouts(array $layouts): self
    {
        $this->initialized['layouts'] = true;
        $this->layouts = $layouts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['layouts' => ['layouts', 'getLayouts', 'setLayouts']];
    }
}