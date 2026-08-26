<?php

namespace Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}