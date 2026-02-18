<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileRateLimitingPrecedenceItem
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
     * Priority
     *
     * @var int
     */
    protected $priority;
    /**
     * Name of rate limiting precedence item
     *
     * @var string
     */
    protected $name;
    /**
     * Priority
     *
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * Priority
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Name of rate limiting precedence item
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of rate limiting precedence item
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}