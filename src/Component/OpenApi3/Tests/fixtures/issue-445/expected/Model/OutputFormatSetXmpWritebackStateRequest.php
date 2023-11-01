<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateRequest
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
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
}