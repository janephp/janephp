<?php

namespace PicturePark\API\Exception;

class DocumentHistoryCompareWithVersionMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Method not allowed');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}