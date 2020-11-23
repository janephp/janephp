<?php

namespace PicturePark\API\Model;

class SchemaTagboxFilterLookupNamedCacheConfiguration
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
     * The layer id.
     *
     * @var string|null
     */
    protected $schemaId;
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
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
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
     *
     * @return self
     */
    public function setCaseSensitive(bool $caseSensitive) : self
    {
        $this->caseSensitive = $caseSensitive;
        return $this;
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
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * The layer id.
     *
     * @return string|null
     */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
     * The layer id.
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
}