<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception;

class DeleteBookingInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem
     */
    private $problem;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Problem $problem, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Server Error');
        $this->problem = $problem;
        $this->response = $response;
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