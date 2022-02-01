<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class PostFooBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400
     */
    private $responseProblemDetailsResponse400;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400 $responseProblemDetailsResponse400)
    {
        parent::__construct('An error occurred');
        $this->responseProblemDetailsResponse400 = $responseProblemDetailsResponse400;
    }
    public function getResponseProblemDetailsResponse400() : \Jane\Component\OpenApi3\Tests\Expected\Model\ResponseProblemDetailsResponse400
    {
        return $this->responseProblemDetailsResponse400;
    }
}