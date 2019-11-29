<?php

namespace Jane\OpenApi2\Tests\Expected\One\Exception;

class TestOneNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Not found', 404);
    }
}
