<?php

namespace PicturePark\API\Exception;

class DocumentHistoryGetCurrentNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkNotFoundException
         */
        private readonly \PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Entity not found');
    }
    public function getPictureparkNotFoundException(): \PicturePark\API\Model\PictureparkNotFoundException
    {
        return $this->pictureparkNotFoundException;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}