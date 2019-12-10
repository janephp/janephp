<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class TestNoTagInternalServerErrorException extends \RuntimeException implements ServerException
{
    public function __construct()
    {
        parent::__construct('Internal server error on test exception', 500);
    }
}
