<?php

namespace PicturePark\API\Model;

class ResizeAction
{
    /**
     * Target width for the output.
     *
     * @var int
     */
    protected $width;
    /**
     * Target height for the output.
     *
     * @var int
     */
    protected $height;
    /**
     * Specifies additional resize behaviour.
     *
     * @var mixed
     */
    protected $resizeMode;
    /**
     * Target width for the output.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * Target width for the output.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * Target height for the output.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Target height for the output.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * Specifies additional resize behaviour.
     *
     * @return mixed
     */
    public function getResizeMode()
    {
        return $this->resizeMode;
    }
    /**
     * Specifies additional resize behaviour.
     *
     * @param mixed $resizeMode
     *
     * @return self
     */
    public function setResizeMode($resizeMode) : self
    {
        $this->resizeMode = $resizeMode;
        return $this;
    }
}