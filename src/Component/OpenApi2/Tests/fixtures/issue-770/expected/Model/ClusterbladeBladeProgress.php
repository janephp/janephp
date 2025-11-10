<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClusterbladeBladeProgress
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
     * bladeUUID of bladeProgress
     *
     * @var string
     */
    protected $bladeUUID;
    /**
     * hostName of bladeProgress
     *
     * @var string
     */
    protected $hostName;
    /**
     * iterationName of bladeProgress
     *
     * @var string
     */
    protected $iterationName;
    /**
     * state of bladeProgress
     *
     * @var string
     */
    protected $state;
    /**
     * progress of bladeProgress
     *
     * @var int
     */
    protected $progress;
    /**
     * bladeUUID of bladeProgress
     *
     * @return string
     */
    public function getBladeUUID(): string
    {
        return $this->bladeUUID;
    }
    /**
     * bladeUUID of bladeProgress
     *
     * @param string $bladeUUID
     *
     * @return self
     */
    public function setBladeUUID(string $bladeUUID): self
    {
        $this->initialized['bladeUUID'] = true;
        $this->bladeUUID = $bladeUUID;
        return $this;
    }
    /**
     * hostName of bladeProgress
     *
     * @return string
     */
    public function getHostName(): string
    {
        return $this->hostName;
    }
    /**
     * hostName of bladeProgress
     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(string $hostName): self
    {
        $this->initialized['hostName'] = true;
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * iterationName of bladeProgress
     *
     * @return string
     */
    public function getIterationName(): string
    {
        return $this->iterationName;
    }
    /**
     * iterationName of bladeProgress
     *
     * @param string $iterationName
     *
     * @return self
     */
    public function setIterationName(string $iterationName): self
    {
        $this->initialized['iterationName'] = true;
        $this->iterationName = $iterationName;
        return $this;
    }
    /**
     * state of bladeProgress
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * state of bladeProgress
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * progress of bladeProgress
     *
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }
    /**
     * progress of bladeProgress
     *
     * @param int $progress
     *
     * @return self
     */
    public function setProgress(int $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
}