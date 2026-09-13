<?php

namespace Jane\Component\OpenApi31\Tests\Expected\GenerateErrorExceptions\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}