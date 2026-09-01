<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputFormatSetXmpWritebackStateRequestItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @var bool
     */
    public bool $enabled;
    /**
     * ID of the output format to set XMP writeback state for.
     *
     * @var string
     */
    public string $id;
    public function definedProperties(): array
    {
        return ['enabled' => 'enabled', 'id' => 'id'];
    }
}