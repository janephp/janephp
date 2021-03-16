<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class TestNoTagCustom600Exception extends Custom600Exception
{
    public function __construct()
    {
        parent::__construct('New update available');
    }
}