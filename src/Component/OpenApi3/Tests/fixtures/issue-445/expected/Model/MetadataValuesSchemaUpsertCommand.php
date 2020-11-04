<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaUpsertCommand extends MetadataValuesChangeCommandBase
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
     * An object containing the metadata values to add / update.
     *
     * @var array<string, mixed>
     */
    protected $value;
    /**
     * An object containing the metadata values to add / update.
     *
     * @return array<string, mixed>
     */
    public function getValue() : iterable
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values to add / update.
     *
     * @param array<string, mixed> $value
     *
     * @return self
     */
    public function setValue(iterable $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}