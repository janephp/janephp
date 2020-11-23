<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class TestNoTag600Exception extends \RuntimeException implements ServerException
{
    public function __construct()
    {
        parent::__construct('New update available', 600);
    }
}