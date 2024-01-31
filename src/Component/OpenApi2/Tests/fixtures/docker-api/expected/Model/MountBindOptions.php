<?php

namespace Docker\Api\Model;

class MountBindOptions
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @var string
     */
    protected $propagation;
    /**
     * Disable recursive bind mount.
     *
     * @var bool
     */
    protected $nonRecursive = false;
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @return string
     */
    public function getPropagation() : string
    {
        return $this->propagation;
    }
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @param string $propagation
     *
     * @return self
     */
    public function setPropagation(string $propagation) : self
    {
        $this->initialized['propagation'] = true;
        $this->propagation = $propagation;
        return $this;
    }
    /**
     * Disable recursive bind mount.
     *
     * @return bool
     */
    public function getNonRecursive() : bool
    {
        return $this->nonRecursive;
    }
    /**
     * Disable recursive bind mount.
     *
     * @param bool $nonRecursive
     *
     * @return self
     */
    public function setNonRecursive(bool $nonRecursive) : self
    {
        $this->initialized['nonRecursive'] = true;
        $this->nonRecursive = $nonRecursive;
        return $this;
    }
}