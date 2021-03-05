<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetFooUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('User must be identified to access this resource');
    }
}