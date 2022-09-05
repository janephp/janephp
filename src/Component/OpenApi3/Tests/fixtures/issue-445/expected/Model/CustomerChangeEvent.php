<?php

namespace PicturePark\API\Model;

class CustomerChangeEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var string|null
     */
    protected $documentType;
    /**
     * Lifecycle
     *
     * @var string
     */
    protected $lifeCycle;
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentType() : ?string
    {
        return $this->documentType;
    }
    /**
     * 
     *
     * @param string|null $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType) : self
    {
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Lifecycle
     *
     * @return string
     */
    public function getLifeCycle() : string
    {
        return $this->lifeCycle;
    }
    /**
     * Lifecycle
     *
     * @param string $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle(string $lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
}