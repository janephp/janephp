<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsRestartRequest extends \ArrayObject
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
     * @var list<string>
     */
    protected $components;
    /**
     * @return list<string>
     */
    public function getComponents(): array
    {
        return $this->components;
    }
    /**
     * @param list<string> $components
     *
     * @return self
     */
    public function setComponents(array $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;
        return $this;
    }
}