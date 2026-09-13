<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}