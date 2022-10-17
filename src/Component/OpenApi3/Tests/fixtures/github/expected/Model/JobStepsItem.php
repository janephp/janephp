<?php

namespace Github\Model;

class JobStepsItem extends \ArrayObject
{
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @var string
     */
    protected $status;
    /**
     * The outcome of the job.
     *
     * @var string|null
     */
    protected $conclusion;
    /**
     * The name of the job.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $number;
    /**
     * The time that the step started, in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $startedAt;
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The outcome of the job.
     *
     * @return string|null
     */
    public function getConclusion() : ?string
    {
        return $this->conclusion;
    }
    /**
     * The outcome of the job.
     *
     * @param string|null $conclusion
     *
     * @return self
     */
    public function setConclusion(?string $conclusion) : self
    {
        $this->conclusion = $conclusion;
        return $this;
    }
    /**
     * The name of the job.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the job.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * The time that the step started, in ISO 8601 format.
     *
     * @return \DateTime|null
     */
    public function getStartedAt() : ?\DateTime
    {
        return $this->startedAt;
    }
    /**
     * The time that the step started, in ISO 8601 format.
     *
     * @param \DateTime|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?\DateTime $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @return \DateTime|null
     */
    public function getCompletedAt() : ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt) : self
    {
        $this->completedAt = $completedAt;
        return $this;
    }
}