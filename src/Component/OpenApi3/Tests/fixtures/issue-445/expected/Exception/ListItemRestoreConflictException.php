<?php

namespace PicturePark\API\Exception;

class ListItemRestoreConflictException extends ConflictException
{
    /**
     * @var \PicturePark\API\Model\PictureparkConflictException
     */
    private $pictureparkConflictException;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\PicturePark\API\Model\PictureparkConflictException $pictureparkConflictException, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Version conflict');
        $this->pictureparkConflictException = $pictureparkConflictException;
        $this->response = $response;
    }
    public function getPictureparkConflictException() : \PicturePark\API\Model\PictureparkConflictException
    {
        return $this->pictureparkConflictException;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}