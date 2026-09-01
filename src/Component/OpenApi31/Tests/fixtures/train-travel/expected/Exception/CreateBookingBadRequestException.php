<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

class CreateBookingBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem $problem,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getProblem(): \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem
    {
        return $this->problem;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}