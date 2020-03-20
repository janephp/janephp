<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class TestNoTagNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Not found get', 404);
    }
}