<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
     */
    private $responseProblemDetailsResponse500;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500 $responseProblemDetailsResponse500)
    {
        parent::__construct('An error occurred');
        $this->responseProblemDetailsResponse500 = $responseProblemDetailsResponse500;
    }
    public function getResponseProblemDetailsResponse500() : \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500
    {
        return $this->responseProblemDetailsResponse500;
    }
}