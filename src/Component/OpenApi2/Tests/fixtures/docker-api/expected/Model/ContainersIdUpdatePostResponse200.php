<?php

namespace Docker\Api\Model;

class ContainersIdUpdatePostResponse200
{
    /**
     * 
     *
     * @var string[]
     */
    protected $warnings;
    /**
     * 
     *
     * @return string[]
     */
    public function getWarnings() : array
    {
        return $this->warnings;
    }
    /**
     * 
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