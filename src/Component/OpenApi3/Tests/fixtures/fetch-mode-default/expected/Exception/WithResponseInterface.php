<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeDefault\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}