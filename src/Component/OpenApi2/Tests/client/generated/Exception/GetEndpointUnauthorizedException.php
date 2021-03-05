<?php

namespace Jane\Component\OpenApi2\Tests\Client\Exception;

class GetEndpointUnauthorizedException extends UnauthorizedException
{
    private $error;
    public function __construct(\Jane\Component\OpenApi2\Tests\Client\Model\Error $error)
    {
        parent::__construct('Unauthaurized response', 401);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}