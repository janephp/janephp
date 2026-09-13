<?php

namespace Jane\Component\OpenApi3\Tests\Expected\MultiResources\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}