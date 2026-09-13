<?php

namespace Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}