<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaUpdateCommand extends MetadataValuesChangeCommandBase
{
    /**
     * An object containing the metadata values to add / update.
     *
     * @var mixed
     */
    protected $value;
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