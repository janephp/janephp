<?php

namespace PicturePark\API\Model;

class OutputDataImage extends OutputDataBase
{
    /**
     * The width of the image.
     *
     * @var int
     */
    protected $width;
    /**
     * The height of the image.
     *
     * @var int
     */
    protected $height;
    /**
     * The width of the image.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * The width of the image.
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
     * The height of the image.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * The height of the image.
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
}