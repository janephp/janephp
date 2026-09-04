<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ThrowUnexceptedStatusCode\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}