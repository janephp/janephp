<?php

namespace Jane\Component\OpenApi2\Tests\Client\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}