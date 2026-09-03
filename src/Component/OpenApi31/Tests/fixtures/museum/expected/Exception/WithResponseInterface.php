<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}