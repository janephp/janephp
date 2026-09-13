<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Api2\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}