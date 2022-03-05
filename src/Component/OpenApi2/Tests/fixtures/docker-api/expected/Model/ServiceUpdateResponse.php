<?php

namespace Docker\Api\Model;

class ServiceUpdateResponse
{
    /**
     * Optional warning messages
     *
     * @var string[]
     */
    protected $warnings;
    /**
     * Optional warning messages
     *
     * @return string[]
     */
    public function getWarnings() : array
    {
        return $this->warnings;
    }
    /**
     * Optional warning messages
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