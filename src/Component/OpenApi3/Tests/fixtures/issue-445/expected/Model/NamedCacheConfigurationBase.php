<?php

namespace PicturePark\API\Model;

class NamedCacheConfigurationBase
{
    /**
     * Name of named cache.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @var bool
     */
    protected $caseSensitive;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Name of named cache.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of named cache.
     *
     * @param string|null $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @return bool
     */
    public function getCaseSensitive() : bool
    {
        return $this->caseSensitive;
    }
    /**
     * Indicates if the lookup should be case sensitive.
     *
     * @param bool $caseSensitive
     */
    public function setCaseSensitive(bool $caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }
}