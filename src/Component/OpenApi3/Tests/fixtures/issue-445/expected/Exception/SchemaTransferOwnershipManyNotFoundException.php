<?php

namespace PicturePark\API\Exception;

class SchemaTransferOwnershipManyNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \PicturePark\API\Model\PictureparkNotFoundException
         */
        private readonly \PicturePark\API\Model\PictureparkNotFoundException $pictureparkNotFoundException,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Entity not found');
    }
    public function getPictureparkNotFoundException(): \PicturePark\API\Model\PictureparkNotFoundException
    {
        return $this->pictureparkNotFoundException;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}