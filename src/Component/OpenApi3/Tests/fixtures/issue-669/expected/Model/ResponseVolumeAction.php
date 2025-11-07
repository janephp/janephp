<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseVolumeAction extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $action;
    /**
     * @return array<string, mixed>
     */
    public function getAction(): iterable
    {
        return $this->action;
    }
    /**
     * @param array<string, mixed> $action
     *
     * @return self
     */
    public function setAction(iterable $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
}