<?php

namespace Jane\Component\OpenApi3\Tests\FetchModePreload\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}