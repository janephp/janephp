<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class TestNoTagInternalServerErrorException extends \RuntimeException implements ServerException
{
    function __construct()
    {
        parent::__construct('Internal server error on test exception', 500);
    }
}