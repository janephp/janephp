<?php

namespace Jane\Component\OpenApi31\Tests\Client\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}