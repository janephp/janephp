<?php

namespace PicturePark\API\Exception;

class UserCreateInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $pictureparkException;
    public function __construct(\PicturePark\API\Model\PictureparkException $pictureparkException)
    {
        parent::__construct('Internal server error', 500);
        $this->pictureparkException = $pictureparkException;
    }
    public function getPictureparkException()
    {
        return $this->pictureparkException;
    }
}