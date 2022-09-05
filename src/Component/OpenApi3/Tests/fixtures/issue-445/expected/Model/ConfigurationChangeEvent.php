<?php

namespace PicturePark\API\Model;

class ConfigurationChangeEvent extends ApplicationEvent
{
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
        $this->documentType = $documentType;
        return $this;
    }
}