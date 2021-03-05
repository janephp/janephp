<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Two\Exception;

class TestTwoNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found');
    }
}