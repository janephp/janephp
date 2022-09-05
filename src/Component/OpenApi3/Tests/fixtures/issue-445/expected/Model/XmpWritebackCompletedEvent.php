<?php

namespace PicturePark\API\Model;

class XmpWritebackCompletedEvent extends ApplicationEvent
{
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
        $this->outputDocId = $outputDocId;
        return $this;
    }
}