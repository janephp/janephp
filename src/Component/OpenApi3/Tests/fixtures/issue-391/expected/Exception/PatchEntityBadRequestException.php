<?php

namespace Gounlaf\JanephpBug\Exception;

class PatchEntityBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('Invalid request');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}