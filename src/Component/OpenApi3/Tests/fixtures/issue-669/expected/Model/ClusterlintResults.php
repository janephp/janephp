<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintResults implements AdditionalPropertiesInterface
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
     * Id of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @var string
     */
    protected $runId;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was made.
     *
     * @var \DateTime
     */
    protected $requestedAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was completed.
     *
     * @var \DateTime
     */
    protected $completedAt;
    /**
     * An array of diagnostics reporting potential problems for the given cluster.
     *
     * @var list<ClusterlintResultsDiagnosticsItem>
     */
    protected $diagnostics;
    /**
     * Id of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @return string
     */
    public function getRunId(): string
    {
        return $this->runId;
    }
    /**
     * Id of the clusterlint run that can be used later to fetch the diagnostics.
     *
     * @param string $runId
     *
     * @return self
     */
    public function setRunId(string $runId): self
    {
        $this->initialized['runId'] = true;
        $this->runId = $runId;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was made.
     *
     * @return \DateTime
     */
    public function getRequestedAt(): \DateTime
    {
        return $this->requestedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was made.
     *
     * @param \DateTime $requestedAt
     *
     * @return self
     */
    public function setRequestedAt(\DateTime $requestedAt): self
    {
        $this->initialized['requestedAt'] = true;
        $this->requestedAt = $requestedAt;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was completed.
     *
     * @return \DateTime
     */
    public function getCompletedAt(): \DateTime
    {
        return $this->completedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the schedule clusterlint run request was completed.
     *
     * @param \DateTime $completedAt
     *
     * @return self
     */
    public function setCompletedAt(\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * An array of diagnostics reporting potential problems for the given cluster.
     *
     * @return list<ClusterlintResultsDiagnosticsItem>
     */
    public function getDiagnostics(): array
    {
        return $this->diagnostics;
    }
    /**
     * An array of diagnostics reporting potential problems for the given cluster.
     *
     * @param list<ClusterlintResultsDiagnosticsItem> $diagnostics
     *
     * @return self
     */
    public function setDiagnostics(array $diagnostics): self
    {
        $this->initialized['diagnostics'] = true;
        $this->diagnostics = $diagnostics;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['runId' => ['run_id', 'getRunId', 'setRunId'], 'requestedAt' => ['requested_at', 'getRequestedAt', 'setRequestedAt'], 'completedAt' => ['completed_at', 'getCompletedAt', 'setCompletedAt'], 'diagnostics' => ['diagnostics', 'getDiagnostics', 'setDiagnostics']];
    }
}