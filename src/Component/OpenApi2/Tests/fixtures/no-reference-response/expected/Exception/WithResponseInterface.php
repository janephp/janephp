<?php

namespace Jane\Component\OpenApi2\Tests\Expected\NoReferenceResponse\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}