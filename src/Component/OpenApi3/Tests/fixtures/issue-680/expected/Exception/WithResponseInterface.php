<?php

namespace Jane\Component\OpenApi3\Tests\Issue680\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}