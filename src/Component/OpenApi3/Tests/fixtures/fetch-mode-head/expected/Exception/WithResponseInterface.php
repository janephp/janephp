<?php

namespace Jane\Component\OpenApi3\Tests\FetchModeHead\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface;
}