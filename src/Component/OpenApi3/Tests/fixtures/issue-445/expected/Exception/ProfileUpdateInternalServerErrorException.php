<?php

namespace PicturePark\API\Exception;

class ProfileUpdateInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \PicturePark\API\Model\PictureparkException
     */
    private $pictureparkException;
    public function __construct(\PicturePark\API\Model\PictureparkException $pictureparkException)
    {
        parent::__construct('Internal server error', 500);
        $this->pictureparkException = $pictureparkException;
    }
    public function getPictureparkException() : \PicturePark\API\Model\PictureparkException
    {
        return $this->pictureparkException;
    }
}