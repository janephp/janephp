<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionsResponse extends \ArrayObject
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
     * The action that was submitted.
     *
     * @var NfsActionsResponseAction
     */
    protected $action;
    /**
     * The action that was submitted.
     *
     * @return NfsActionsResponseAction
     */
    public function getAction(): NfsActionsResponseAction
    {
        return $this->action;
    }
    /**
     * The action that was submitted.
     *
     * @param NfsActionsResponseAction $action
     *
     * @return self
     */
    public function setAction(NfsActionsResponseAction $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}