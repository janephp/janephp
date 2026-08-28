<?php

namespace Jane\Component\OpenApi3\Tests\Client\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}