<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class GetBookingsInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\Problem
     */
    private $problem;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\Problem $problem, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Server Error');
        $this->problem = $problem;
        $this->response = $response;
    }
    public function getProblem(): \Jane\Component\OpenApi31\Tests\Expected\Model\Problem
    {
        return $this->problem;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}