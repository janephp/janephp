<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}