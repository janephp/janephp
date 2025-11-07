<?php

namespace Jane\Generated\DigitalOcean\Model;

class Grant extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the bucket.
     *
     * @var string
     */
    protected $bucket;
    /**
     * The permission to grant to the user. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
     *
     * @var string
     */
    protected $permission;
    /**
     * The name of the bucket.
     *
     * @return string
     */
    public function getBucket(): string
    {
        return $this->bucket;
    }
    /**
     * The name of the bucket.
     *
     * @param string $bucket
     *
     * @return self
     */
    public function setBucket(string $bucket): self
    {
        $this->initialized['bucket'] = true;
        $this->bucket = $bucket;
        return $this;
    }
    /**
     * The permission to grant to the user. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
     *
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
    /**
     * The permission to grant to the user. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission): self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
}