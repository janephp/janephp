<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class Traffic implements AdditionalPropertiesInterface
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
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * @var int
     */
    protected $uniques;
    /**
     * @var int
     */
    protected $count;
    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }
    /**
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return int
     */
    public function getUniques(): int
    {
        return $this->uniques;
    }
    /**
     * @param int $uniques
     *
     * @return self
     */
    public function setUniques(int $uniques): self
    {
        $this->initialized['uniques'] = true;
        $this->uniques = $uniques;
        return $this;
    }
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['timestamp' => ['timestamp', 'getTimestamp', 'setTimestamp'], 'uniques' => ['uniques', 'getUniques', 'setUniques'], 'count' => ['count', 'getCount', 'setCount']];
    }
}