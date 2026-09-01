<?php

namespace PicturePark\API\Model;

class XmpMappingEntryEditable
{
    /**
     * Direction of the mapping.
     *
     * @var string
     */
    public string $direction;
    /**
     * Priority of the mapping.
     *
     * @var int
     */
    public int $priority;
    /**
     * Stop processing further mappings for the same field if a value was found.
     *
     * @var bool
     */
    public bool $stopProcessing;
    /**
     * Path to source property in XMP.
     *
     * @var string
     */
    public string $xmpPath;
    /**
     * Path to target property in metadata.
     *
     * @var string
     */
    public string $metadataPath;
    /**
     * Optional additional configuration for the mapping.
     *
     * @var XmpMappingEntryConfigurationBase|null
     */
    public ?XmpMappingEntryConfigurationBase $configuration;
}