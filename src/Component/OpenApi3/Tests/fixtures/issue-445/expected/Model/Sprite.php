<?php

namespace PicturePark\API\Model;

class Sprite
{
    /**
     * The width of the sprite.
     *
     * @var int
     */
    public int $width;
    /**
     * The height of the sprite.
     *
     * @var int
     */
    public int $height;
    /**
     * Y coordinate of the sprite in the saved file.
     *
     * @var int
     */
    public int $y;
    /**
     * X coordinate of the sprite in the saved file.
     *
     * @var int
     */
    public int $x;
    /**
     * The starting point in time of the sprite in the video.
     *
     * @var string
     */
    public string $start;
    /**
     * The ending point in time of the sprite in the video.
     *
     * @var string
     */
    public string $end;
}