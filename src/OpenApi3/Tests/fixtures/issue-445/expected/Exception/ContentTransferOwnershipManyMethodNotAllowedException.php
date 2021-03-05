<?php

namespace PicturePark\API\Exception;

class ContentTransferOwnershipManyMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}