<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentResponse implements AdditionalPropertiesInterface
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
     * @var AppsDeployment
     */
    protected $deployment;
    /**
     * @return AppsDeployment
     */
    public function getDeployment(): AppsDeployment
    {
        return $this->deployment;
    }
    /**
     * @param AppsDeployment $deployment
     *
     * @return self
     */
    public function setDeployment(AppsDeployment $deployment): self
    {
        $this->initialized['deployment'] = true;
        $this->deployment = $deployment;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['deployment' => ['deployment', 'getDeployment', 'setDeployment']];
    }
}