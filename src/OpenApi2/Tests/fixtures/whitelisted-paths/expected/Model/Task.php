<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class Task
{
    /**
     * Unique ID for the task.
     *
     * @var int
     */
    protected $id;
    /**
     * The name of the task.
     *
     * @var string
     */
    protected $name;
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @var bool
     */
    protected $billableByDefault;
    /**
     * The hourly rate to use for this task when it is added to a project.
     *
     * @var float
     */
    protected $defaultHourlyRate;
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Whether this task is active or archived.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Date and time the task was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the task was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the task.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the task.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The name of the task.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the task.
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
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @return bool
     */
    public function getBillableByDefault() : bool
    {
        return $this->billableByDefault;
    }
    /**
     * Used in determining whether default tasks should be marked billable when creating a new project.
     *
     * @param bool $billableByDefault
     *
     * @return self
     */
    public function setBillableByDefault(bool $billableByDefault) : self
    {
        $this->billableByDefault = $billableByDefault;
        return $this;
    }
    /**
     * The hourly rate to use for this task when it is added to a project.
     *
     * @return float
     */
    public function getDefaultHourlyRate() : float
    {
        return $this->defaultHourlyRate;
    }
    /**
     * The hourly rate to use for this task when it is added to a project.
     *
     * @param float $defaultHourlyRate
     *
     * @return self
     */
    public function setDefaultHourlyRate(float $defaultHourlyRate) : self
    {
        $this->defaultHourlyRate = $defaultHourlyRate;
        return $this;
    }
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * Whether this task should be automatically added to future projects.
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Whether this task is active or archived.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Whether this task is active or archived.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Date and time the task was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the task was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the task was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the task was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}