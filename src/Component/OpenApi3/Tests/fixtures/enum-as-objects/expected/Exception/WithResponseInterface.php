<?php

namespace Jane\Component\OpenApi3\Tests\EnumAsObjects\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}