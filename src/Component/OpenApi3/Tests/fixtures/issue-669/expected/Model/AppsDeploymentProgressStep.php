<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentProgressStep implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $componentName;
    /**
     * @var \DateTime
     */
    public \DateTime $endedAt;
    /**
     * The base of a human-readable description of the step intended to be combined with the component name for presentation. For example:
     * 
     * `message_base` = "Building service"
     * `component_name` = "api"
     *
     * @var string
     */
    public string $messageBase;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var AppsDeploymentProgressStepReason
     */
    public AppsDeploymentProgressStepReason $reason;
    /**
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * @var string
     */
    public string $status = 'UNKNOWN';
    /**
     * @var list<array<string, mixed>>
     */
    public array $steps;
    public function definedProperties(): array
    {
        return ['componentName' => 'component_name', 'endedAt' => 'ended_at', 'messageBase' => 'message_base', 'name' => 'name', 'reason' => 'reason', 'startedAt' => 'started_at', 'status' => 'status', 'steps' => 'steps'];
    }
}