<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}