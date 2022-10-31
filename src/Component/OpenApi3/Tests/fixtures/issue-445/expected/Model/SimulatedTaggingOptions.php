<?php

namespace PicturePark\API\Model;

class SimulatedTaggingOptions extends TaggingOptionsBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Number of keywords to assign.
     *
     * @var string|null
     */
    protected $numberOfKeywords;
    /**
     * Number of keywords to assign.
     *
     * @return string|null
     */
    public function getNumberOfKeywords() : ?string
    {
        return $this->numberOfKeywords;
    }
    /**
     * Number of keywords to assign.
     *
     * @param string|null $numberOfKeywords
     *
     * @return self
     */
    public function setNumberOfKeywords(?string $numberOfKeywords) : self
    {
        $this->initialized['numberOfKeywords'] = true;
        $this->numberOfKeywords = $numberOfKeywords;
        return $this;
    }
}