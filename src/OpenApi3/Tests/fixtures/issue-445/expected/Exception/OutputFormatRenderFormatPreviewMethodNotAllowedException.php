<?php

namespace PicturePark\API\Exception;

class OutputFormatRenderFormatPreviewMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}