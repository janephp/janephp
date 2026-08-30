<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}