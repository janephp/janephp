<?php

namespace PicturePark\API\Model;

class CropAction
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * X-Coordinate of top left point of the cropping rectangle.
     *
     * @var int
     */
    protected $x;
    /**
     * Y-Coordinate of top left point of the cropping rectangle.
     *
     * @var int
     */
    protected $y;
    /**
     * Width of the cropping rectangle.
     *
     * @var int
     */
    protected $width;
    /**
     * Height of the cropping rectangle.
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * X-Coordinate of top left point of the cropping rectangle.
     *
     * @return int
     */
    public function getX() : int
    {
        return $this->x;
    }
    /**
     * X-Coordinate of top left point of the cropping rectangle.
     *
     * @param int $x
     *
     * @return self
     */
    public function setX(int $x) : self
    {
        $this->x = $x;
        return $this;
    }
    /**
     * Y-Coordinate of top left point of the cropping rectangle.
     *
     * @return int
     */
    public function getY() : int
    {
        return $this->y;
    }
    /**
     * Y-Coordinate of top left point of the cropping rectangle.
     *
     * @param int $y
     *
     * @return self
     */
    public function setY(int $y) : self
    {
        $this->y = $y;
        return $this;
    }
    /**
     * Width of the cropping rectangle.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * Width of the cropping rectangle.
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
     * Height of the cropping rectangle.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Height of the cropping rectangle.
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