<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Exception;

class GetPetNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPetIdGetResponse404
         */
        private readonly \Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPetIdGetResponse404 $petsPetIdGetResponse404,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Not found');
    }
    public function getPetsPetIdGetResponse404(): \Jane\Component\OpenApi3\Tests\FetchModeDefault\Model\PetsPetIdGetResponse404
    {
        return $this->petsPetIdGetResponse404;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}