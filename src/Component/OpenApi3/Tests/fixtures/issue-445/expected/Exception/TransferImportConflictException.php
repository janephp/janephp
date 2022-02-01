<?php

namespace PicturePark\API\Exception;

class TransferImportConflictException extends ConflictException
{
    /**
     * @var \PicturePark\API\Model\PictureparkConflictException
     */
    private $pictureparkConflictException;
    public function __construct(\PicturePark\API\Model\PictureparkConflictException $pictureparkConflictException)
    {
        parent::__construct('Version conflict', 409);
        $this->pictureparkConflictException = $pictureparkConflictException;
    }
    public function getPictureparkConflictException() : \PicturePark\API\Model\PictureparkConflictException
    {
        return $this->pictureparkConflictException;
    }
}