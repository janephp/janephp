<?php

namespace PicturePark\API\Model;

class AudioFormatBase extends FormatBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}