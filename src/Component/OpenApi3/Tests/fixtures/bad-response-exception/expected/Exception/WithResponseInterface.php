<?php

namespace Jane\Component\OpenApi3\Tests\BadResponse\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}