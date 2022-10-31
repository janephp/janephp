<?php

namespace PicturePark\API\Model;

class ShareEmbedCreateRequest extends ShareBaseCreateRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}