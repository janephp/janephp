<?php

namespace PicturePark\API\Exception;

class TransferGetBlacklistConflictException extends ConflictException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkConflictException
         */
        private readonly \PicturePark\API\Model\PictureparkConflictException $pictureparkConflictException,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Version conflict');
    }
    public function getPictureparkConflictException(): \PicturePark\API\Model\PictureparkConflictException
    {
        return $this->pictureparkConflictException;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}