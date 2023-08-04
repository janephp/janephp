<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaReplaceCommand extends MetadataValuesChangeCommandBase
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
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
     *
     * @var array<string, mixed>
     */
    protected $value;
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
     *
     * @return array<string, mixed>
     */
    public function getValue() : iterable
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
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