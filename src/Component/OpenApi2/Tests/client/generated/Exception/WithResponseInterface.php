<?php

namespace Jane\Component\OpenApi2\Tests\Client\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}