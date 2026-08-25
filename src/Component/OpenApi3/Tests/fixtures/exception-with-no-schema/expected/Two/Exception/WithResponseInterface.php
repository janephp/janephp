<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Two\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}