<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeEager\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}