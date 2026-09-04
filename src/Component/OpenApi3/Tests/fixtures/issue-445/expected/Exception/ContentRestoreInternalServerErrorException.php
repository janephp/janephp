<?php

namespace PicturePark\API\Exception;

class ContentRestoreInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkException
         */
        private readonly \PicturePark\API\Model\PictureparkException $pictureparkException,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Internal server error');
    }
    public function getPictureparkException(): \PicturePark\API\Model\PictureparkException
    {
        return $this->pictureparkException;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}