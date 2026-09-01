<?php

namespace PicturePark\API\Model;

class MetadataValuesChangeCommandBase
{
    /**
     * The ID of the schema to which the operation scope is addressed.
     *
     * @var string
     */
    public string $schemaId;
    /**
     * @var string
     */
    public string $kind;
}