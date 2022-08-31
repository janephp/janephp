<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaUpdateCommand extends MetadataValuesChangeCommandBase
{
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
     * An object containing the metadata values to add / update.
     *
     * @var mixed
     */
    protected $value;
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
     *
     * @return self
     */
    public function setSchemaId(string $schemaId) : self
    {
        $this->schemaId = $schemaId;
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
     * An object containing the metadata values to add / update.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values to add / update.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
        return $this;
    }
}