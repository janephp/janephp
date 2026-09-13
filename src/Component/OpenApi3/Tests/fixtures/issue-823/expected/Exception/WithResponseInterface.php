<?php

namespace Jane\Component\OpenApi3\Tests\Issue823\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}