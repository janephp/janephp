<?php

namespace PicturePark\API\Model;

class ResizeAction
{
    /**
     * Target width for the output.
     *
     * @var int
     */
    public int $width;
    /**
     * Target height for the output.
     *
     * @var int
     */
    public int $height;
    /**
     * Specifies additional resize behaviour.
     *
     * @var string
     */
    public string $resizeMode;
}