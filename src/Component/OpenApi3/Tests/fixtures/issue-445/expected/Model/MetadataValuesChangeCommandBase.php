<?php

namespace PicturePark\API\Model;

class MetadataValuesChangeCommandBase
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
     * The ID of the schema to which the operation scope is addressed.
     *
     * @var string
     */
    protected $schemaId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @return string
     */
    public function getSchemaId() : string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @param string $schemaId
     */
    public function setSchemaId(string $schemaId)
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
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