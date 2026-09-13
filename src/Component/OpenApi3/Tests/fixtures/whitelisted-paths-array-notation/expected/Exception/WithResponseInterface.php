<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}