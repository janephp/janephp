<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ThrowUnexpectedStatusCode\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}