<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Problem
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A URI reference that identifies the problem type
     *
     * @var string
     */
    protected $type;
    /**
     * A short, human-readable summary of the problem type
     *
     * @var string
     */
    protected $title;
    /**
     * A human-readable explanation specific to this occurrence of the problem
     *
     * @var string
     */
    protected $detail;
    /**
     * A URI reference that identifies the specific occurrence of the problem
     *
     * @var string
     */
    protected $instance;
    /**
     * The HTTP status code
     *
     * @var int
     */
    protected $status;
    /**
     * A URI reference that identifies the problem type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * A URI reference that identifies the problem type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * A short, human-readable summary of the problem type
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * A short, human-readable summary of the problem type
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * A human-readable explanation specific to this occurrence of the problem
     *
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }
    /**
     * A human-readable explanation specific to this occurrence of the problem
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
        return $this;
    }
    /**
     * A URI reference that identifies the specific occurrence of the problem
     *
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }
    /**
     * A URI reference that identifies the specific occurrence of the problem
     *
     * @param string $instance
     *
     * @return self
     */
    public function setInstance(string $instance): self
    {
        $this->initialized['instance'] = true;
        $this->instance = $instance;
        return $this;
    }
    /**
     * The HTTP status code
     *
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    /**
     * The HTTP status code
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}