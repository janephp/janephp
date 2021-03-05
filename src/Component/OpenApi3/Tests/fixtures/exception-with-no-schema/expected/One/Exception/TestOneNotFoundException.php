<?php

namespace Jane\Component\OpenApi3\Tests\Expected\One\Exception;

class TestOneNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found');
    }
}