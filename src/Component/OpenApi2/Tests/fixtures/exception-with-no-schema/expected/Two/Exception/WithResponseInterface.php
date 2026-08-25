<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Two\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}