<?php

namespace Jane\Component\OpenApi2\Tests\Issue832\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}