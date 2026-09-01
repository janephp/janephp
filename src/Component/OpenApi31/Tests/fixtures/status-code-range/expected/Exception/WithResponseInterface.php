<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}