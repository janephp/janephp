<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppAlertProgress implements AdditionalPropertiesInterface
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
     * @var list<AppAlertProgressStep>
     */
    protected $steps;
    /**
     * @return list<AppAlertProgressStep>
     */
    public function getSteps(): array
    {
        return $this->steps;
    }
    /**
     * @param list<AppAlertProgressStep> $steps
     *
     * @return self
     */
    public function setSteps(array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['steps' => ['steps', 'getSteps', 'setSteps']];
    }
}