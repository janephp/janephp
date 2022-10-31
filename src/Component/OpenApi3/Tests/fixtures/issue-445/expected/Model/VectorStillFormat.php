<?php

namespace PicturePark\API\Model;

class VectorStillFormat extends FormatBase
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
    protected $extension;
    /**
     * Specifies output dimensions for raster operation
     *
     * @var mixed|null
     */
    protected $resizeAction;
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
    /**
     * Specifies output dimensions for raster operation
     *
     * @return mixed
     */
    public function getResizeAction()
    {
        return $this->resizeAction;
    }
    /**
     * Specifies output dimensions for raster operation
     *
     * @param mixed $resizeAction
     *
     * @return self
     */
    public function setResizeAction($resizeAction) : self
    {
        $this->initialized['resizeAction'] = true;
        $this->resizeAction = $resizeAction;
        return $this;
    }
}