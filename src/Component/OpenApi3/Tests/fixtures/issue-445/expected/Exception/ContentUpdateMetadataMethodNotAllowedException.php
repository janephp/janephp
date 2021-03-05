<?php

namespace PicturePark\API\Exception;

class ContentUpdateMetadataMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}