<?php

namespace PicturePark\API\Model;

class Sprite
{
    /**
     * The width of the sprite.
     *
     * @var int
     */
    protected $width;
    /**
     * The height of the sprite.
     *
     * @var int
     */
    protected $height;
    /**
     * Y coordinate of the sprite in the saved file.
     *
     * @var int
     */
    protected $y;
    /**
     * X coordinate of the sprite in the saved file.
     *
     * @var int
     */
    protected $x;
    /**
     * The starting point in time of the sprite in the video.
     *
     * @var string
     */
    protected $start;
    /**
     * The ending point in time of the sprite in the video.
     *
     * @var string
     */
    protected $end;
    /**
     * The width of the sprite.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * The width of the sprite.
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
     * The height of the sprite.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * The height of the sprite.
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
     * Y coordinate of the sprite in the saved file.
     *
     * @return int
     */
    public function getY() : int
    {
        return $this->y;
    }
    /**
     * Y coordinate of the sprite in the saved file.
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
     * X coordinate of the sprite in the saved file.
     *
     * @return int
     */
    public function getX() : int
    {
        return $this->x;
    }
    /**
     * X coordinate of the sprite in the saved file.
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
     * The starting point in time of the sprite in the video.
     *
     * @return string
     */
    public function getStart() : string
    {
        return $this->start;
    }
    /**
     * The starting point in time of the sprite in the video.
     *
     * @param string $start
     *
     * @return self
     */
    public function setStart(string $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
     * The ending point in time of the sprite in the video.
     *
     * @return string
     */
    public function getEnd() : string
    {
        return $this->end;
    }
    /**
     * The ending point in time of the sprite in the video.
     *
     * @param string $end
     *
     * @return self
     */
    public function setEnd(string $end) : self
    {
        $this->end = $end;
        return $this;
    }
}