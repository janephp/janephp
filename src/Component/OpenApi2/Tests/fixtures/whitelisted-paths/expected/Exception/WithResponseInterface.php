<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPaths\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}