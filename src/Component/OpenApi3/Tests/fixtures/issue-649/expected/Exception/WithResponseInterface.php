<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue649\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}