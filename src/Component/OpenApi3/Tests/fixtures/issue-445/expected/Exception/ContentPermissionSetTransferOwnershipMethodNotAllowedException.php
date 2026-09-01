<?php

namespace PicturePark\API\Exception;

class ContentPermissionSetTransferOwnershipMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Method not allowed');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}