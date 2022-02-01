<?php

namespace PicturePark\API\Exception;

class ListItemGetReferencesManyInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \PicturePark\API\Model\PictureparkException
     */
    private $pictureparkException;
    public function __construct(\PicturePark\API\Model\PictureparkException $pictureparkException)
    {
        parent::__construct('Internal server error');
        $this->pictureparkException = $pictureparkException;
    }
    public function getPictureparkException() : \PicturePark\API\Model\PictureparkException
    {
        return $this->pictureparkException;
    }
}