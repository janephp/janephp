<?php

namespace PicturePark\API\Model;

class MetadataField
{
    /**
     * Path to the field in metadata.
     *
     * @var string
     */
    public string $path;
    /**
     * Indicates if the field can act as target for a mapping.
     * If field is read-only, it can only act as source of a mapping.
     *
     * @var bool
     */
    public bool $isWritable;
    /**
     * Data type of the field.
     *
     * @var string
     */
    public string $dataType;
    /**
     * A list of field IDs that can be used as a key field when a tagbox is mapped.
     *
     * @var list<string>|null
     */
    public ?array $availableKeyFields;
}