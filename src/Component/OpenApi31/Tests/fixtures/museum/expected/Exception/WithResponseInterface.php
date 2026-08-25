<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}