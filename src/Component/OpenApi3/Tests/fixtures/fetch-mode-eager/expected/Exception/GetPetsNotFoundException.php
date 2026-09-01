<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeEager\Exception;

class GetPetsNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\FetchModeEager\Model\PetsGetResponse404
         */
        private readonly \Jane\Component\OpenApi3\Tests\FetchModeEager\Model\PetsGetResponse404 $petsGetResponse404,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Not found');
    }
    public function getPetsGetResponse404(): \Jane\Component\OpenApi3\Tests\FetchModeEager\Model\PetsGetResponse404
    {
        return $this->petsGetResponse404;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}