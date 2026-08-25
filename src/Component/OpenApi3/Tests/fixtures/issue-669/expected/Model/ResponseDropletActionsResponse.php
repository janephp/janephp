<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDropletActionsResponse implements AdditionalPropertiesInterface
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
     * @var list<Action>
     */
    protected $actions;
    /**
     * @return list<Action>
     */
    public function getActions(): array
    {
        return $this->actions;
    }
    /**
     * @param list<Action> $actions
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
        return ['actions' => ['actions', 'getActions', 'setActions']];
    }
}