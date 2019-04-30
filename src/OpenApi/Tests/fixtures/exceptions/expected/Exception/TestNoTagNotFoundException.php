<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class TestNoTagNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found get', 404);
    }
}