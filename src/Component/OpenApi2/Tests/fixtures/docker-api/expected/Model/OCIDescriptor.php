<?php

namespace Docker\Api\Model;

class OCIDescriptor
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
     * The media type of the object this schema refers to.
     *
     * @var string
     */
    protected $mediaType;
    /**
     * The digest of the targeted content.
     *
     * @var string
     */
    protected $digest;
    /**
     * The size in bytes of the blob.
     *
     * @var int
     */
    protected $size;
    /**
     * The media type of the object this schema refers to.
     *
     * @return string
     */
    public function getMediaType() : string
    {
        return $this->mediaType;
    }
    /**
     * The media type of the object this schema refers to.
     *
     * @param string $mediaType
     *
     * @return self
     */
    public function setMediaType(string $mediaType) : self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * The digest of the targeted content.
     *
     * @return string
     */
    public function getDigest() : string
    {
        return $this->digest;
    }
    /**
     * The digest of the targeted content.
     *
     * @param string $digest
     *
     * @return self
     */
    public function setDigest(string $digest) : self
    {
        $this->initialized['digest'] = true;
        $this->digest = $digest;
        return $this;
    }
    /**
     * The size in bytes of the blob.
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The size in bytes of the blob.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
}