<?php

namespace PicturePark\API\Model;

class XmpField
{
    /**
     * Path of the field in XMP.
     *
     * @var string|null
     */
    public ?string $path;
    /**
     * Indicates if the field can be written to.
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
}