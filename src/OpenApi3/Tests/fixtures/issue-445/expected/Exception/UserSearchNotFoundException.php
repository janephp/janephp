<?php

namespace PicturePark\API\Exception;

class UserSearchNotFoundException extends NotFoundException
{
    private $pictureparkNotFoundException;
    public function __construct(\PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException)
    {
        parent::__construct('Entity not found', 404);
        $this->pictureparkNotFoundException = $pictureparkNotFoundException;
    }
    public function getPictureparkNotFoundException()
    {
        return $this->pictureparkNotFoundException;
    }
}