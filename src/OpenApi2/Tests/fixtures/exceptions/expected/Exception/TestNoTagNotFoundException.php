<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class TestNoTagNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Not found get');
    }
}