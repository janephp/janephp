<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentProgress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $errorSteps;
    /**
     * @var int
     */
    public int $pendingSteps;
    /**
     * @var int
     */
    public int $runningSteps;
    /**
     * @var list<AppsDeploymentProgressStep>
     */
    public array $steps;
    /**
     * @var int
     */
    public int $successSteps;
    /**
     * @var list<AppsDeploymentProgressStep>
     */
    public array $summarySteps;
    /**
     * @var int
     */
    public int $totalSteps;
    public function definedProperties(): array
    {
        return ['errorSteps' => 'error_steps', 'pendingSteps' => 'pending_steps', 'runningSteps' => 'running_steps', 'steps' => 'steps', 'successSteps' => 'success_steps', 'summarySteps' => 'summary_steps', 'totalSteps' => 'total_steps'];
    }
}