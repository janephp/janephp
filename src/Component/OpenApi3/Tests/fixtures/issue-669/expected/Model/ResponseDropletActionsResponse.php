<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDropletActionsResponse extends \ArrayObject
{
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
}