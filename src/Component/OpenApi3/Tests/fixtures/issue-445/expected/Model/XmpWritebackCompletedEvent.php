<?php

namespace PicturePark\API\Model;

class XmpWritebackCompletedEvent extends ApplicationEvent
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
     * 
     *
     * @var string|null
     */
    protected $outputDocId;
    /**
     * 
     *
     * @return string|null
     */
    public function getOutputDocId() : ?string
    {
        return $this->outputDocId;
    }
    /**
     * 
     *
     * @param string|null $outputDocId
     *
     * @return self
     */
    public function setOutputDocId(?string $outputDocId) : self
    {
        $this->initialized['outputDocId'] = true;
        $this->outputDocId = $outputDocId;
        return $this;
    }
}