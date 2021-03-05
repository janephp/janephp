<?php

namespace PicturePark\API\Exception;

class OutputFormatRenderFormatPreviewPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}