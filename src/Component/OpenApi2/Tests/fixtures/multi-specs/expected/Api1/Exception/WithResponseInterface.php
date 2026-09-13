<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Api1\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}