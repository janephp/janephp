<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDeploymentProgress implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $errorSteps;
    /**
     * @var int
     */
    protected $pendingSteps;
    /**
     * @var int
     */
    protected $runningSteps;
    /**
     * @var list<AppsDeploymentProgressStep>
     */
    protected $steps;
    /**
     * @var int
     */
    protected $successSteps;
    /**
     * @var list<AppsDeploymentProgressStep>
     */
    protected $summarySteps;
    /**
     * @var int
     */
    protected $totalSteps;
    /**
     * @return int
     */
    public function getErrorSteps(): int
    {
        return $this->errorSteps;
    }
    /**
     * @param int $errorSteps
     *
     * @return self
     */
    public function setErrorSteps(int $errorSteps): self
    {
        $this->initialized['errorSteps'] = true;
        $this->errorSteps = $errorSteps;
        return $this;
    }
    /**
     * @return int
     */
    public function getPendingSteps(): int
    {
        return $this->pendingSteps;
    }
    /**
     * @param int $pendingSteps
     *
     * @return self
     */
    public function setPendingSteps(int $pendingSteps): self
    {
        $this->initialized['pendingSteps'] = true;
        $this->pendingSteps = $pendingSteps;
        return $this;
    }
    /**
     * @return int
     */
    public function getRunningSteps(): int
    {
        return $this->runningSteps;
    }
    /**
     * @param int $runningSteps
     *
     * @return self
     */
    public function setRunningSteps(int $runningSteps): self
    {
        $this->initialized['runningSteps'] = true;
        $this->runningSteps = $runningSteps;
        return $this;
    }
    /**
     * @return list<AppsDeploymentProgressStep>
     */
    public function getSteps(): array
    {
        return $this->steps;
    }
    /**
     * @param list<AppsDeploymentProgressStep> $steps
     *
     * @return self
     */
    public function setSteps(array $steps): self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
    /**
     * @return int
     */
    public function getSuccessSteps(): int
    {
        return $this->successSteps;
    }
    /**
     * @param int $successSteps
     *
     * @return self
     */
    public function setSuccessSteps(int $successSteps): self
    {
        $this->initialized['successSteps'] = true;
        $this->successSteps = $successSteps;
        return $this;
    }
    /**
     * @return list<AppsDeploymentProgressStep>
     */
    public function getSummarySteps(): array
    {
        return $this->summarySteps;
    }
    /**
     * @param list<AppsDeploymentProgressStep> $summarySteps
     *
     * @return self
     */
    public function setSummarySteps(array $summarySteps): self
    {
        $this->initialized['summarySteps'] = true;
        $this->summarySteps = $summarySteps;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalSteps(): int
    {
        return $this->totalSteps;
    }
    /**
     * @param int $totalSteps
     *
     * @return self
     */
    public function setTotalSteps(int $totalSteps): self
    {
        $this->initialized['totalSteps'] = true;
        $this->totalSteps = $totalSteps;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['errorSteps' => ['error_steps', 'getErrorSteps', 'setErrorSteps'], 'pendingSteps' => ['pending_steps', 'getPendingSteps', 'setPendingSteps'], 'runningSteps' => ['running_steps', 'getRunningSteps', 'setRunningSteps'], 'steps' => ['steps', 'getSteps', 'setSteps'], 'successSteps' => ['success_steps', 'getSuccessSteps', 'setSuccessSteps'], 'summarySteps' => ['summary_steps', 'getSummarySteps', 'setSummarySteps'], 'totalSteps' => ['total_steps', 'getTotalSteps', 'setTotalSteps']];
    }
}