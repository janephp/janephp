<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateRequestItem extends \ArrayObject
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
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * ID of the output format to set XMP writeback state for.
     *
     * @var string
     */
    protected $id;
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
    /**
     * ID of the output format to set XMP writeback state for.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of the output format to set XMP writeback state for.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}