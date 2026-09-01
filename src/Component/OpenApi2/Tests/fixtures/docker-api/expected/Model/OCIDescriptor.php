<?php

namespace Docker\Api\Model;

class OCIDescriptor
{
    /**
     * The media type of the object this schema refers to.
     * 
     *
     * @var string
     */
    public string $mediaType;
    /**
     * The digest of the targeted content.
     * 
     *
     * @var string
     */
    public string $digest;
    /**
     * The size in bytes of the blob.
     * 
     *
     * @var int
     */
    public int $size;
}