<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentDeploymentVisbilityOutput implements AdditionalPropertiesInterface
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
     * An Agent
     *
     * @var ApiAgent
     */
    protected $agent;
    /**
     * An Agent
     *
     * @return ApiAgent
     */
    public function getAgent(): ApiAgent
    {
        return $this->agent;
    }
    /**
     * An Agent
     *
     * @param ApiAgent $agent
     *
     * @return self
     */
    public function setAgent(ApiAgent $agent): self
    {
        $this->initialized['agent'] = true;
        $this->agent = $agent;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['agent' => ['agent', 'getAgent', 'setAgent']];
    }
}