<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

class GetBookingsBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem $problem,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getProblem(): \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem
    {
        return $this->problem;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}