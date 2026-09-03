<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exceptions\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}