<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooInternalServerErrorException extends InternalServerErrorException
{
    private $responseProblemDetailsResponse500;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse500 $responseProblemDetailsResponse500)
    {
        parent::__construct('An error occurred', 500);
        $this->responseProblemDetailsResponse500 = $responseProblemDetailsResponse500;
    }
    public function getResponseProblemDetailsResponse500()
    {
        return $this->responseProblemDetailsResponse500;
    }
}