<?php

namespace PicturePark\API\Model;

class ConfigurationChangeEvent extends ApplicationEvent
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
    protected $documentType;
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
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
}