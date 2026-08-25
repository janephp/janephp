<?php

namespace Jane\Component\OpenApi2\Tests\Expected\One\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}