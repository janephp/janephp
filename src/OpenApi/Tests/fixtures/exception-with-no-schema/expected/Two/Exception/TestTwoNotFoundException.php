<?php

namespace Jane\OpenApi\Tests\Expected\Two\Exception;

class TestTwoNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Not found', 404);
    }
}