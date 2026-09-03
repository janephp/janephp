<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}