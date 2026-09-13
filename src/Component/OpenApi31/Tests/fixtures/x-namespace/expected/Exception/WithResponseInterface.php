<?php

namespace Jane\Component\OpenApi31\Tests\Expected\XNamespace\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}