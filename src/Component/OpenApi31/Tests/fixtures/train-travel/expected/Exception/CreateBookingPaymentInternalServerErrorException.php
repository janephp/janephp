<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class CreateBookingPaymentInternalServerErrorException extends InternalServerErrorException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Model\Problem
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Model\Problem $problem,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Internal Server Error');
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