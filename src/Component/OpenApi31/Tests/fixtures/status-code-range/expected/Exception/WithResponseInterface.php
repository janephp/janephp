<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}