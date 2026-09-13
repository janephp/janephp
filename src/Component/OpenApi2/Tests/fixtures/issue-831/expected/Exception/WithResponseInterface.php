<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Issue831\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}