<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateRequest
{
    /**
     * Indicates if XMP writeback shall be enabled for the format.
     *
     * @var bool
     */
    public bool $enabled;
}