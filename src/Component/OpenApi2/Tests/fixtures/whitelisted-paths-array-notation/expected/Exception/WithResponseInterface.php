<?php

namespace Jane\OpenApi2\Tests\Expected\WhitelistedPathsArrayNotation\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}