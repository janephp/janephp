<?php

namespace Jane\Component\OpenApi2\Tests\EnumAsObjects\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}