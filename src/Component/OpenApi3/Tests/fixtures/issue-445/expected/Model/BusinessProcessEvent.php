<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessEvent extends ApplicationEvent implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * @var string|null
     */
    protected $lifeCycle;
    /**
     * @var string|null
     */
    protected $state;
    /**
     * @return string|null
     */
    public function getBusinessProcessId(): ?string
    {
        return $this->businessProcessId;
    }
    /**
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId): self
    {
        $this->initialized['businessProcessId'] = true;
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLifeCycle(): ?string
    {
        return $this->lifeCycle;
    }
    /**
     * @param string|null $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle(?string $lifeCycle): self
    {
        $this->initialized['lifeCycle'] = true;
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['businessProcessId' => ['businessProcessId', 'getBusinessProcessId', 'setBusinessProcessId'], 'lifeCycle' => ['lifeCycle', 'getLifeCycle', 'setLifeCycle'], 'state' => ['state', 'getState', 'setState']];
    }
}