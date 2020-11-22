<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

final class UnexpectedStatusCodeException implements ClientException
{
    public function __construct($status)
    {
        parent::__construct('', $status);
    }
}