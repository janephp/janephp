<?php

namespace Jane\OpenApi3\Tests\Expected\One\Exception;

class TestOneNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Not found', 404);
    }
}