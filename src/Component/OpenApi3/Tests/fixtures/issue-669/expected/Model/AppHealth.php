<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppHealth extends \ArrayObject
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
     * @var list<AppComponentHealth>
     */
    protected $components;
    /**
     * @var list<AppFunctionsComponentHealth>
     */
    protected $functionsComponents;
    /**
     * @return list<AppComponentHealth>
     */
    public function getComponents(): array
    {
        return $this->components;
    }
    /**
     * @param list<AppComponentHealth> $components
     *
     * @return self
     */
    public function setComponents(array $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;
        return $this;
    }
    /**
     * @return list<AppFunctionsComponentHealth>
     */
    public function getFunctionsComponents(): array
    {
        return $this->functionsComponents;
    }
    /**
     * @param list<AppFunctionsComponentHealth> $functionsComponents
     *
     * @return self
     */
    public function setFunctionsComponents(array $functionsComponents): self
    {
        $this->initialized['functionsComponents'] = true;
        $this->functionsComponents = $functionsComponents;
        return $this;
    }
}