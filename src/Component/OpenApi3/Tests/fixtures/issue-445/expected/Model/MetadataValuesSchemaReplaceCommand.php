<?php

namespace PicturePark\API\Model;

class MetadataValuesSchemaReplaceCommand extends MetadataValuesChangeCommandBase
{
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
     *
     * @var mixed
     */
    protected $value;
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * An object containing the metadata values for the schema. The existing dictionary will be entirely overwritten.
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