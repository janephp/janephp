<?php

namespace PicturePark\API\Exception;

class ContentAggregateOnChannelConflictException extends ConflictException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkConflictException
         */
        private readonly \PicturePark\API\Model\PictureparkConflictException $pictureparkConflictException,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Version conflict');
    }
    public function getPictureparkConflictException(): \PicturePark\API\Model\PictureparkConflictException
    {
        return $this->pictureparkConflictException;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}