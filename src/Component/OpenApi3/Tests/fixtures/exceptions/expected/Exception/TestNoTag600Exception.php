<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestNoTag600Exception extends 600Exception
{
    public function __construct()
    {
        parent::__construct('New update available');
    }
}