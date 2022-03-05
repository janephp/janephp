<?php

namespace Docker\Api\Model;

class ContainersCreatePostResponse201
{
    /**
     * The ID of the created container
     *
     * @var string
     */
    protected $id;
    /**
     * Warnings encountered when creating the container
     *
     * @var string[]
     */
    protected $warnings;
    /**
     * The ID of the created container
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The ID of the created container
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Warnings encountered when creating the container
     *
     * @return string[]
     */
    public function getWarnings() : array
    {
        return $this->warnings;
    }
    /**
     * Warnings encountered when creating the container
     *
     * @param string[] $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}