<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTagInternalServerErrorException extends InternalServerErrorException
{
    public function __construct()
    {
        parent::__construct('Internal server error on test exception');
    }
}