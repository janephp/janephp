<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}