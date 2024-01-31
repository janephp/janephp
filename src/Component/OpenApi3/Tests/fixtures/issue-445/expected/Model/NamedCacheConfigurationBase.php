<?php

namespace PicturePark\API\Model;

class NamedCacheConfigurationBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['name'] = true;
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
        $this->initialized['caseSensitive'] = true;
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
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}