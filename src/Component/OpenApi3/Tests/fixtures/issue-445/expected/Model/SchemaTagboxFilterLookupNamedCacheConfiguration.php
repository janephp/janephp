<?php

namespace PicturePark\API\Model;

class SchemaTagboxFilterLookupNamedCacheConfiguration extends NamedCacheConfigurationBase
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
     * The layer id.
     *
     * @var string|null
     */
    protected $schemaId;
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
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
}