<?php

namespace Docker\Api\Model;

class BuildCache
{
    /**
     * @var string
     */
    public string $iD;
    /**
     * @var string
     */
    public string $parent;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var bool
     */
    public bool $inUse;
    /**
     * @var bool
     */
    public bool $shared;
    /**
     * Amount of disk space used by the build cache (in bytes).
     * 
     *
     * @var int
     */
    public int $size;
    /**
     * Date and time at which the build cache was created in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var string
     */
    public string $createdAt;
    /**
     * Date and time at which the build cache was last used in
     * [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
     * 
     *
     * @var string|null
     */
    public ?string $lastUsedAt;
    /**
     * @var int
     */
    public int $usageCount;
}