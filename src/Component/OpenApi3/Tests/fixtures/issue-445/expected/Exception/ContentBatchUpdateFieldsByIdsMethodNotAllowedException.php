<?php

namespace PicturePark\API\Exception;

class ContentBatchUpdateFieldsByIdsMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}