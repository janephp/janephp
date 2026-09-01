<?php

namespace PicturePark\API\Model;

class NamedCacheConfigurationBase
{
    /**
     * Name of named cache.
     *
     * @var string|null
     */
    public ?string $name;
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @var bool
     */
    public bool $caseSensitive;
    /**
     * @var string
     */
    public string $kind;
}