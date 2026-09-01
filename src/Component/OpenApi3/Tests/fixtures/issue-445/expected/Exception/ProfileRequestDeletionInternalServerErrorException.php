<?php

namespace PicturePark\API\Exception;

class ProfileRequestDeletionInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkException
         */
        private readonly \PicturePark\API\Model\PictureparkException $pictureparkException,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Internal server error');
    }
    public function getPictureparkException(): \PicturePark\API\Model\PictureparkException
    {
        return $this->pictureparkException;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}