<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $jobName;
    /**
     * @var string
     */
    public string $deploymentId;
    /**
     * The phase of the job invocation
     *
     * @var string
     */
    public string $phase;
    /**
     * @var AppJobInvocationTrigger
     */
    public AppJobInvocationTrigger $trigger;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * @var \DateTime
     */
    public \DateTime $completedAt;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'jobName' => 'job_name', 'deploymentId' => 'deployment_id', 'phase' => 'phase', 'trigger' => 'trigger', 'createdAt' => 'created_at', 'startedAt' => 'started_at', 'completedAt' => 'completed_at'];
    }
}