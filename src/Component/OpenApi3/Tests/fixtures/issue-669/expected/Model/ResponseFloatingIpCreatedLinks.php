<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseFloatingIpCreatedLinks implements AdditionalPropertiesInterface
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
     * @var list<ActionLink>
     */
    protected $droplets;
    /**
     * @var list<ActionLink>
     */
    protected $actions;
    /**
     * @return list<ActionLink>
     */
    public function getDroplets(): array
    {
        return $this->droplets;
    }
    /**
     * @param list<ActionLink> $droplets
     *
     * @return self
     */
    public function setDroplets(array $droplets): self
    {
        $this->initialized['droplets'] = true;
        $this->droplets = $droplets;
        return $this;
    }
    /**
     * @return list<ActionLink>
     */
    public function getActions(): array
    {
        return $this->actions;
    }
    /**
     * @param list<ActionLink> $actions
     *
     * @return self
     */
    public function setActions(array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['droplets' => ['droplets', 'getDroplets', 'setDroplets'], 'actions' => ['actions', 'getActions', 'setActions']];
    }
}