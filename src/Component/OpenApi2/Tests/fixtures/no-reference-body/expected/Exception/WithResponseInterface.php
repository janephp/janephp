<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NoReferenceBody\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}