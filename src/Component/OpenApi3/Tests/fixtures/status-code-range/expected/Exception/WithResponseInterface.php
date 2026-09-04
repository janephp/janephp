<?php

namespace Jane\Component\OpenApi3\Tests\StatusCodeRange\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}